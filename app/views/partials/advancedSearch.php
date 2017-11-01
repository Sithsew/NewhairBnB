<?php require('header.php') ?>

<div class="col-md-3 " align="" style="margin-top: 75px; height: 3px">
    <form class="form-control" action="/search" style="height: 650px;margin-bottom:200px; padding: 23px" >

        <div class="  form-group">
            <div class="row">
                <div class="col-md-4" align="left">
                    <label for="example-date-input"  class="col-md-4 col-form-label"><b>Date</b></label>
                </div>

                <div class="col-md-8">
                    <input class="form-control" type="date" name="date" value="2011-08-19" id="example-date-input">
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
                        <option>Colombo</option>
                        <option>Galle</option>
                        <option>Kurunagala</option>
                    </select>
                </div>
            </div>
        </div>

        <div class=" form-group" style="padding-top: 5%">
            <div class="row">
                <div class="col-md-4" align="left">
                    <label for="" ><b>Skills</b></label>
                </div>

                <div class="col-md-8">
                    <select class="form-control" name="skills">
                        <option>Professional</option>
                        <option>Apprentice</option>
                        <option>Educator</option>
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

                    <input class="form-control" type="text"  id="example-number-input" name="bname">

                </div>
            </div>
        </div>

        <div class=" form-group" style="padding-top: 5%">
            <div class="row">
                <div class="col-md-4" align="left">
                    <label for="example-date-input"><b>Price From : $</b></label>
                </div>

                <div class="col-md-8">

                    <input class="form-control" type="number" value="0" id="example-number-input" name="priceFrom">

                </div>
            </div>
        </div>

        <div class=" form-group" style="padding-top: 5%">
            <div class="row">
                <div class="col-md-4" align="left">
                    <label for="example-date-input"><b>Price To : $</b></label>
                </div>

                <div class="col-md-8">

                    <input class="form-control" type="number" value="10" id="example-number-input" name="priceTo">

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
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>
        </div>



        <divb align="right" style="padding-top: 5%">
            <div>
                <button class="btn btn-btn" type="button" style="padding: 10px" >
                    Search
                </button>
            </div>
        </div>



    </form>
</div>

<?php require('footer.php') ?>







