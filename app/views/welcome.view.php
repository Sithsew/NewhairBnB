<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <!-- Slick - the carousel slider -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="../../public/css/style.css">

    </head>

    <body>

        <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse" style="background-color: mediumvioletred">

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Hair BnB</a>
            <div class="navbar-nav mr-auto mt-2 mt-lg-0 navbar-toggler-right">
                <p class="nav-item " >
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Login </a>
                    <?php include 'login.view.php'?>
                </p>
                <p >
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#signUpModal">Sign Up </a>
                    <?php include 'signUp.view.php'?>

            </div>

        </div>
    </nav>


        <?php include 'partials/slideShow.php'?>

        <form action=" " class="search-form-main">

            <div class="row">

                <div class="col-md-1">

                </div>

                <div class="col-md-3  form-group">
                    <div class="row">
                        <label for="example-date-input" class="col-md-4 col-form-label" style="color: white;"><b>Date</b></label>
                        <div class="col-8">
                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                        </div>
                    </div>
                </div>

                <div class="col-md-2 form-group">
                    <div class="row">
                        <label for="" class="col-md-4 col-form-label" style="color: white;"><b>Location</b></label>
                        <div class="col-8">
                            <select class="form-control" id="exampleSelect1">
                                <option>Colombo</option>
                                <option>Galle</option>
                                <option>Kurunagala</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 form-group">
                    <div class="row">
                        <label for="" class="col-md-4 col-form-label" style="color: white;"><b>Skills</b></label>
                        <div class="col-md-8">
                            <select class="form-control" id="exampleSelect1">
                                <option>Professional</option>
                                <option>Apprentice</option>
                                <option>Educator</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-offset-2">
                    <button class="btn btn-btn" type="submit" style="width: 150px" >
                        Search
                    </button>
                </div>

            </div>

        </form>

        <div class="body-container">

            <div style="margin-top: 20px">

                <h2 align="center">How it works?</h2>

<!--                images-->
                <div class="row" style="margin-top: 20px">

                    <div class="col-md-4" align="center">
                        <img src="../../public/images/search.png" style="width: 20%" >

                    </div>

                    <div class="col-md-4" align="center">
                        <img src="../../public/images/booking.png" style="width: 20%" >
                    </div>

                    <div class="col-md-4" align="center">
                        <img src="../../public/images/review.png" style="width: 40%" >
                    </div>

                </div>

<!--                sentence-->
                <div class="row" style="margin-top: 20px" >

                    <div class="col-md-4" align="center">
                        <p><b>Find Stylist/ Educator</b></p>
                        <hr style="width: 50%">
                        <p>Filter a search to match your timeframe, budget and location</p>
                    </div>

                    <div class="col-md-4" align="center">
                        <p align="center"><b>Book Stylist/ Educator</b></p>
                        <hr style="width: 50%">
                        <p>Pay in advance to lock in your educator/stylist</p>
                    </div>

                    <div class="col-md-4" align="center">
                        <p align="center"><b>Review Stylist/ Educator</b></p>
                        <hr style="width: 50%">
                        <p>When the educator finishes, rate their work and approve their payment</p>
                    </div>

                </div>

            </div>

        </div>

        <?php include 'partials/topUsers.php'; ?>







        <?php include 'partials/footer.php'; ?>

    </body>

</html>