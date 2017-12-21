<!--Popular hair stylists-->
<div class="container-fluid  top-stylists" style="padding: 30px" >
    <div class="container pop-salons" style="padding: 2%">

        <h2 style="padding-bottom: 10px;color: white" align="center">Popular Hair Stylists</h2>

        <div class=" autoplay slider ">

            <button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block" >Previous</button>

            <?php foreach ($stylists as $stylist): ?>


                <div>

                    <div class="card cards" style="width: 13rem; height:370px; padding-top: 10px" align="center">

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

                            <a href="#" >More</a>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

            <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button>

        </div>
    </div>
</div>


<!--Popular hair stylists-->

<div class="container-fluid top-salons" style="margin-bottom: 180px;padding: 30px"" >
    <div class="container pop-stylists" style="padding: 2%;margin-top: 30px">

        <h2 style="padding-bottom: 10px;color: white" align="center" >Popular Salons</h2>

        <div class="autoplay slider">

            <button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block">Previous</button>

            <?php foreach ($salons as $salon): ?>


                <div>

                    <div class="card cards" style="width: 13rem; height:360px; padding-top: 10px;" align="center">

                        <img class="card-img-top" src="../../public/images/proPic.jpg" alt="Card image cap" style="width: 90%;" >

                        <div class="card-block" align="center" >

                            <h3 class="card-title" style="color: black">
                                <?= ucwords($salon->business_name)?>
                            </h3>
                            <h6 class="card-text" style="color: black">
                                <?= ucwords($salon->address_line1)?>
                            </h6>
                            <h6 class="card-text" style="color: black">
                                <?= ucwords($salon->address_line2)?>
                            </h6>
                            <h6 class="card-text" style="color: black">
                                <?= ucwords($salon->postal_code)?>
                            </h6>
                            <div class="row" align="center" style="margin-left:15px">
                                <?php
                                $star=$salon->net_rating;
                                $whiteStar= 5-$star;
                                for ($a=0; $a<$star; $a++){
                                    ?>
                                    <img src="../../public/images/star.png" style="width:30px; height: 30%;size:auto">
                                <?php }  for ($a=0; $a<$whiteStar; $a++){?>
                                    <img src="../../public/images/whiteStar.png"  style="width:30px; height: 30%;size:auto">
                                <?php } ?>

                            </div>

                            <a href="#" >More</a>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

            <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button>

        </div>
    </div>

</div>


<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<!-- Pooper JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<!-- Slick - the carousel slider  -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<!-- Custom JavaScript -->
<script type="text/javascript">
    $('.autoplay').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    arrows: true,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 767,
                settings: {
                    arrows: true,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                    arrows: true,
                    slidesToShow: 1
                }
            }
        ]
    })
</script>
