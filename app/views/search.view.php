<?php require('partials/header.php') ?>

    <div class="col-md-3 advancedSearch"  style=" margin-left: 15px;margin-top: 15px;  margin-bottom:400px">

        <form method="post" action="/search" class="form-control " style="height: 700px;margin-bottom:220px; padding: 20px" >
            <h4 align="center" style="margin-bottom: 15px">Search Your Freelancer</h4>
            <div class="  form-group">
                <div class="row">
                    <div class="col-md-4" align="left">
                        <label for="example-date-input"  class="col-md-4 col-form-label"><b>Date</b></label>
                    </div>

                    <div class="col-md-8">
                        <input class="form-control" type="date" name="date" value="<?= date("Y-m-d")?>" id="example-date-input">
                    </div>
                </div>
            </div>

            <div class=" form-group" style="padding-top: 5%">
                <div class="row">
                    <div class="col-md-4" align="left">
                        <label for="" ><b>Location</b></label>
                    </div>

                    <div class="col-md-8">
                        <select class="form-control" id="exampleSelect1" name="city">
                            <option value="0">All</option>
                            <option value="Colombo">Colombo</option>
                            <option value="Galle">Galle</option>
                            <option value="Kurunagala">Kurunagala</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class=" form-group" style="padding-top: 5%">
                <div class="row">
                    <div class="col-md-4" align="left">
                        <label for="skills" ><b>Skills</b></label>
                    </div>

                    <div class="col-md-8">
                        <select class="form-control" name="skills">
                            <option value="0">All</option>
                            <option value="1">Professional</option>
                            <option value="2">Educator</option>
                            <option value="3">Apprentice</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="  form-group" style="padding-top: 5%">
                <div class="row">
                    <div class="col-md-4" align="left">
                        <label for="example-date-input"><b>Business Name</b></label>
                    </div>

                    <div class="col-md-8">

                        <input class="form-control" type="text"  id="example-number-input" name="bname" placeholder="Enter Business Name you want">

                    </div>
                </div>
            </div>

            <div class=" form-group" style="padding-top: 5%">
                <div class="row">
                    <div class="col-md-4" align="left">
                        <label for="example-date-input"><b>Price From : $</b></label>
                    </div>

                    <div class="col-md-8">

                        <input class="form-control" type="number" placeholder="Minimum Price 0$" id="example-number-input" name="priceFrom">

                    </div>
                </div>
            </div>

            <div class=" form-group" style="padding-top: 5%">
                <div class="row">
                    <div class="col-md-4" align="left">
                        <label for="example-date-input"><b>Price To : $</b></label>
                    </div>

                    <div class="col-md-8">

                        <input class="form-control" type="number" placeholder="Maximum Price 60$" id="example-number-input" name="priceTo">

                    </div>
                </div>
            </div>

            <div class="  form-group" style="padding-top: 5%">
                <div class="row">
                    <div class="col-md-4" align="left">
                        <label for="example-date-input" ><b>Type</b></label>
                    </div>

                    <div class="col-md-8">

                        <select class="form-control" name="type">
                            <option value="0">All</option>
                            <option value="1">Gents</option>
                            <option value="2"> Ladies</option>
                            <option value="3"> Children</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="  form-group" style="padding-top: 5%">
                <div class="row">
                    <div class="col-md-4" align="left">
                        <label for="example-date-input" ><b>Gender</b></label>
                    </div>

                    <div class="col-md-8">

                        <select class="form-control" name="gender">
                            <option value="0" >All </option>
                            <option value="1">Male</option>
                            <option value="2"> Female</option>
                        </select>
                    </div>
                </div>
            </div>



            <div align="right" >
                <div>
                    <button class="btn btn-success" type="submit" style="padding: 10px; width: 130px" >
                        Search
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="col-md-8 " align="center" style=" margin-left: 25%;padding-bottom: 600px;">
        <div align="center" style="margin-top: 70px; padding-bottom: 500px; margin-bottom: 700px">
            <?php if (!empty($stylists)) { ?>

                <h2 style="padding-top: 15px" align="center">Search Results</h2>
                <h5 style="padding-top: 15px" align="center">

                    <?php

                        echo "You Searched " ;

                        if (!empty($search['gender'])){
                            if ($search['gender']==1){
                                echo " Male ";
                            }else if ($search['skill']==2){
                                echo " Female ";
                            }
                        }

                        if (!empty($search['skill'])){
                            if ($search['skill']==1){
                                echo " Professional Hair Stylists ";
                            }else if ($search['skill']==2){
                                echo " Hair Stylist Educators ";
                            }else if ($search['skill']==3){
                                echo " Apprentice ";
                            }
                        }else {
                            echo " Freelancers ";
                        }

                        if (!empty($search['type'])){
                            if ($search['type']==1){
                                echo " Specialized Type Gents ";
                            }else if ($search['type']==2){
                                echo " Specialized Type Ladies ";
                            }else if ($search['type']==3){
                                echo " Specialized Type Children ";
                            }
                        }

                        if (!empty($search['date'])){
                            echo " Availability on " .$search['date'];
                        }

                        if (!empty($search['location'])){
                            echo ", in ".$search['location'];
                        }

                        if (!empty($search['businessName'])){
                            echo ", with Business Name Like ".$search['businessName'];
                        }

                        if (!empty($search['priceFrom'])){
                            echo ", with Minimum Price ".$search['priceFrom'];
                        }

                        if (!empty($search['priceTo'])){
                            echo ", and Maximum Price ".$search['priceTo'];
                        }

                    ?>

                </h5>

                <div class="col-md-12" align="center" style=" margin: 2%">
                    <?php foreach ($stylists as $stylist): ?>
                        <div class="col-md-2 left" style="margin: 20px" >
                            <div class="search card" style="width: 13rem; height:370px; padding-top: 10px; " align="center">

                                <img class="card-img-top" src="../../public/images/proPic.jpg" alt="Card image cap" style="width: 90%;" >

                                <div class="card-block" align="center" >

                                    <h3 class="card-title" style="color: black">
                                        <?= ucwords($stylist->business_name)?>
                                    </h3>
                                    <h6 class="card-text" style="color: black">
                                        <?= ucwords($stylist->address_line1)?>
                                    </h6>
                                    <h6 class="card-text" style="color: black">
                                        <?= ucwords($stylist->address_line2)?>
                                    </h6>
                                    <h6 class="card-text" style="color: black">
                                        <?= ucwords($stylist->postal_code)?>
                                    </h6>

                                    <div class="row" align="center" style="margin-left:15px">
                                        <?php
                                            $star=$stylist->net_rating;
                                            $whiteStar= 5-$star;
                                            for ($a=0; $a<$star; $a++){
                                        ?>
                                            <img src="../../public/images/star.png" style="width:30px; height: 30%;size:auto">
                                        <?php }  for ($a=0; $a<$whiteStar; $a++){?>
                                            <img src="../../public/images/whiteStar.png"  style="width:30px; height: 30%;size:auto">
                                        <?php } ?>
                                    </div>

                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>

            <?php } else {?>
        </div>

        <div class="col-md-8 " align="" style="margin-top: 55px; height: 3px">
            <h2 style="padding: 35px" align="center">Sorry..!!! We couldn't find what you want..Try Something Else!</h2>
            <h6 style="padding-top: 15px" align="center">
                <?php echo "You Searched " ;

                if (!empty($search['gender'])){
                    if ($search['gender']==1){
                        echo " Male ";
                    }else if ($search['skill']==2){
                        echo " Female ";
                    }
                }

                if (!empty($search['skill'])){
                    if ($search['skill']==1){
                        echo " Professional Hair Stylists ";
                    }else if ($search['skill']==2){
                        echo " Hair Stylist Educators ";
                    }else if ($search['skill']==3){
                        echo " Apprentice ";
                    }
                }else {
                    echo " Freelancers ";
                }

                if (!empty($search['type'])){
                    if ($search['type']==1){
                        echo " Specialized Type Gents ";
                    }else if ($search['type']==2){
                        echo " Specialized Type Ladies ";
                    }else if ($search['type']==3){
                        echo " Specialized Type Children ";
                    }
                }

                if (!empty($search['date'])){
                    echo " Availability on " .$search['date'];
                }

                if (!empty($search['location'])){
                    echo ", in ".$search['location'];
                }

                if (!empty($search['businessName'])){
                    echo ", with Business Name Like ".$search['businessName'];
                }

                if (!empty($search['priceFrom'])){
                    echo ", with Minimum Price ".$search['priceFrom'];
                }

                if (!empty($search['priceTo'])){
                    echo ", and Maximum Price ".$search['priceTo'];
                }

                ?>
            </h6>

        </div>
        <?php } ?>
    </div>



<?php require('partials/footer.php') ?>







