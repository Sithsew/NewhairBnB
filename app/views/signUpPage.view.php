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
                            <label><b>First Name</b></label><span class="error" " >    *</span>
                            <input type="text" class="form-control" name="firsName" >
                            <span class="error" " > <?php
                                if (!empty($errors)){
                                    if (!empty($errors['firstnameErr'])){
                                        echo $errors['firstnameErr'] ;
                                    }
                                }
                                ?>
                            </span>
                        </div>

                        <div class="col-md-6 form-group">
                            <label ><b>Last Name</b></label><span class="error" " >    * </span>
                            <input type="text" class="form-control" name="lastName" >
                            <span class="error" " > <?php
                            if (!empty($errors)){
                                if (!empty($errors['lastnameErr'])){
                                    echo $errors['lastnameErr'] ;
                                }
                            }
                            ?>
                            </span>                        </div>

                    </div>

                    <div class="form-group">
                        <label><b>Email</b></label><span class="error" " >    * </span>
                        <input type="email" class="form-control" name="email" >
                        <span class="error" " > <?php
                        if (!empty($errors)){
                            if (!empty($errors['emailErr'])){
                                echo $errors['emailErr'] ;
                            }
                        }
                        ?>
                        </span>                    </div>

                    <div class="form-group">
                        <label><b>Password</b></label><span class="error" " >    * </span>
                        <input type="password" class="form-control" name="password" >
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
                            <input type="checkbox" checked="checked" name="salon" value="Salon"><b>Salon</b><br>

                        </div>

                        <div class="col-md-6"  >
                            <input type="checkbox" name="stylist" value="Stylist"><b>Stylist</b>
                        </div>
                        <div class="row">
                            <span class="error" " > <?php
                            if (!empty($errors)){
                                if (!empty($errors['acc_typeErr'])){
                                    echo $errors['acc_typeErr'] ;
                                }
                            }
                            ?>
                            </span></div>

                    </div>

                    <div class="form-group">
                        <label><b>Business Name for Salon</b></label>
                        <input type="text" class="form-control" name="bnameSalon"  >
                        <span class="error" " > <?php
                        if (!empty($errors)){
                            if (!empty($errors['salonErr'])){
                                echo $errors['salonErr'] ;
                            }
                        }
                        ?>
                        </span>                    </div>

                    <div class="form-group">
                        <label><b>Business Name for Stylist</b></label>
                        <input type="text" class="form-control" name="bnameStylist" >
                        <span class="error" " > <?php
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
                        <button type="submit" class="btn btn-success" name="btn-signUp" style="width: 150px;">Sign Up</button>
                    </div>


                </form>

            </div>
        </div>




<?php require 'partials/footer.php'?>