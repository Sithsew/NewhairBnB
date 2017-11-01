<!DOCTYPE>
<html>
    <head>
        <title>Hair BnB</title>
        <meta charset="UTF-8">
        <title>Hair BnB</title>

        <!-- css-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="../../public/css/style.css">

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>



    </head>
    <body class="login">
        <div class="row col-md-12 bg"  style="padding: 12%; width: 8000px">
            <div class="col-md-4">

            </div>
            <div class="col-md-4 form-control" style="padding: 25px; height: 410px" >
                <h3 align="center">Welcome to the Hair BnB!!!</h3>
                <p align="center"><b>Login to Your Newly Created Account</b></p>
                <form action="" method="post" style="margin-top: 20px" >
                    <div class="form-group" >
                        <label><b>Email :</b></label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label><b>Password :</b></label>
                        <input type="password" class="form-control" name="password" required>
                        <span class="error">
                            <?php
                                if(!empty($errors)){
                                    echo "$errors";
                                }
                            ?>
                        </span>
                    </div>
                    <div align="center" >
                        <a href=" "><u>Forgot Password</u></a>
                    </div>
                    <div align="center">
                        <input type="checkbox" checked="checked">Keep me signned in
                    </div>

                    <div class="row col-md-12" align="right" style="margin-top: 15px">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-8">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width: 90px;">Close</button>

                            <button type="submit" class="btn btn-success"  style="width: 90px; auto" >Login</button>
                        </div>



                    </div>

                </form>
            </div>
            <div class="col-md-4">

            </div>

        </div>

    </body>
</html>



