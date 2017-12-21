<?php require 'partials/header.php';
?>

<div class="row col-md-12 "  style="padding: 3%; width: 8000px; margin-bottom: 100px">

    <div class="col-md-4">

    </div>

    <div class="col-md-4">
        <h3 align="center" style="padding: 15px"> Sign Up</h3>

        <form action="/signUp " method="post" style="margin-top: 15px;margin-bottom: 100px">

            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="firsName"><b>First Name</b></label><span class="error"  >    *</span>

                    <input id="firsName" type="text" name="firsName" value="<?php if (!empty($_POST['firsName'])) { echo $_POST['firsName'];} ?> " class="form-control" />
                    <span class="error"> <?php
                        if (!empty($errors)){
                            if (!empty($errors['firstnameErr'])){
                                echo $errors['firstnameErr'] ;
                            }
                        }
                        ?>
                    </span>
                </div>

                <div class="col-md-6 form-group">
                    <label for="lastName"><b>Last Name</b></label><span class="error"  >    * </span>
                    <input id="lastName" type="text" class="form-control" name="lastName" value="<?php if (!empty($_POST['lastName'])) { echo $_POST['lastName'];} ?> ">
                    <span class="error" " > <?php
                    if (!empty($errors)){
                        if (!empty($errors['lastnameErr'])){
                            echo $errors['lastnameErr'] ;
                        }
                    }
                    ?>
                    </span>
                </div>

            </div>

            <div class="form-group">
                <label for="email"><b>Email</b></label><span class="error"  >    * </span>
                <input id="email" type="email" class="form-control" name="email" value="<?php if (!empty($_POST['email'])) { echo $_POST['email'];} ?>">
                <span class="error" " > <?php
                if (!empty($errors)){
                    if (!empty($errors['emailErr'])){
                        echo $errors['emailErr'] ;
                    }
                }
                ?>
                </span>                    </div>

            <div class="form-group">
                <label for="password"><b>Password</b></label><span class="error"  >    * </span>
                <input id="password" type="password" class="form-control" name="password" >
                <span class="error" " > <?php
                if (!empty($errors)){
                    if (!empty($errors['passwrdErr'])){
                        echo $errors['passwrdErr'] ;
                    }
                }
                ?>
                </span>                    </div>

            <div class="row" style="margin-bottom: 10px">

                <div class="col-md-6" >
                    <input id="Salon" type="checkbox" checked="checked" name="salon" value="Salon"><b>Salon</b><br>

                </div>

                <div class="col-md-6"  >
                    <input id="Stylist" type="checkbox" name="stylist" value="Stylist"><b>Stylist</b>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <span class="error"  > <?php
                        if (!empty($errors)){
                            if (!empty($errors['acc_typeErr'])){
                                echo $errors['acc_typeErr'] ;
                            }
                        }
                        ?>
                        </span>
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label for="bnameSalon"><b>Business Name for Salon</b></label>
                <input type="text" id="bnameSalon" class="form-control" name="bnameSalon" value="<?php if (!empty($_POST['bnameSalon'])) { echo $_POST['bnameSalon'];} ?>" >
                <span class="error" > <?php
                if (!empty($errors)){
                    if (!empty($errors['salonErr'])){
                        echo $errors['salonErr'] ;
                    }
                }
                ?>
                </span>                    </div>

            <div class="form-group">
                <label for="bnameStylist"><b>Business Name for Stylist</b></label>
                <input type="text" id="bnameStylist" class="form-control" name="bnameStylist" value="<?php if (!empty($_POST['bnameStylist'])) { echo $_POST['bnameStylist'];} ?>" >
                <span class="error"  > <?php
                if (!empty($errors)){
                    if (!empty($errors['stylistErr'])){
                        echo $errors['stylistErr'] ;
                    }
                }
                ?>
                </span>                    </div>

            <input type="checkbox" value="1" checked="checked" name="preference"> I would like to receive promotion emails.
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <div align="right" style="margin-top: 20px">
                <button type="submit" class="btn btn-success" name="btn-signUp" onclick="<?php unset($filledData)?>" style="width: 150px;">Sign Up</button>
            </div>


        </form>

    </div>
</div>

<?php require 'partials/footer.php'?>