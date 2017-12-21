<?php require('partials/header.php');
    session_start();
    if (isset($_SESSION['id'])){
        $firstname = ucwords($_SESSION['firstname']);
        $lastname =ucwords($_SESSION['lastname']);
        $role = $_SESSION['user_role'];
?>

    <div  align="center" style="padding: 1%; margin-bottom: 300px">
        <a href="/welcome"><img src="../public/images/home.png" style="height: 40px;"align="right" ></a>
<!--        <div class="row" align="center">-->
<!--            <div class="col-md-10" align="">-->
<!--                <h1>Welcome to Hair BnB,</h1>-->
<!--                <h3 style="padding: 5px">--><?//=$firstname." " .$lastname?><!--</h3>-->
<!--                <h4>This is your Salon Account</h4>-->
<!--            </div>-->
<!--            <div class="col-md-2" align="right">-->
<!--                --><?php //if ($role==='3'){
//                    ?>
<!--                    <h4><a href="/stylist"><img src="../public/images/stylistAcc.jpg" style="height: 110px;"align="right" ></a></h4>-->
<!--                --><?php //} ?>
<!--            </div>-->
<!--        </div>-->
        <div class="row">
            <div class="col-md-9" >
                <div class="container">
                    <ul class="nav nav-tabs nav-fill " style="background-color: gainsboro"">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#Calendar">Calendar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#Requests">Requests</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#Appointments">Appointments</a>
                        </li>

                    </ul>
                    <div class="tab-content" style="background-color: gainsboro">
                        <div id="Calendar" class="active tab-pane fade in " style="height: 830px">
                            <iframe id="snippet-preview" src="//s.bootsnipp.com/iframe/M3jmA" frameborder="no"></iframe>

                            <script type="text/javascript">
                                var _gaq = _gaq || [];
                                _gaq.push(['_setAccount', 'UA-34731274-1']);
                                _gaq.push(['_trackPageview']);
                                _gaq.push(['_trackEvent', 'sharing', 'viewed full-screen', 'snippet M3jmA',0,true]);
                                (function() {
                                    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                                })();
                            </script>
                            <script type="text/javascript">
                                (function($) {
                                    $('#theme_chooser').change(function(){
                                        whichCSS = $(this).val();
                                        document.getElementById('snippet-preview').contentWindow.changeCSS(whichCSS);
                                    });
                                })(jQuery);
                            </script>
                        </div>
                        <div id="Requests" class="tab-pane fade" style="padding: 3%">
                            <h3>Requests</h3>
                        </div>
                        <div id="Appointments" class="tab-pane fade" style="padding: 3%">
                            <h3>Appointments</h3>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div  >
                    <h1>Welcome to Hair BnB,</h1>
                    <h3 style="padding: 5px"><?=$firstname." " .$lastname?></h3>
                    <h4>This is your Salon Account</h4>
                </div>
                <div class="col-md-2"  style="padding: 3%">
                    <?php if ($role==='3'){
                        ?>
                        <a href="/stylist"><img src="../public/images/stylistAcc.jpg" style="height: 110px; "  > </a>
                        <h6 >Stylist Account</h6>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>

<?php }else {?>

    <div style="margin: 50px">
        <h4 align="center" style="margin-top: 400px">Please Login to your account</h4>

    </div>

<?php };
    require('partials/footer.php')
?>














