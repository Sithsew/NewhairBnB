
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" >Sign Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                require 'app/controllers/AccountController.php';
                $accCont = new \App\Controllers\AccountController();
                $fnameErr= $accCont->firstnameErr;
                $lastnameErr = $accCont->lastnameErr;
                $emailErr = $accCont->emailErr;
                $passwrdErr = $accCont->passwrdErr;
                $accTypeErr =  $accCont->accTypeErr;
                $salonNameErr = $accCont->salonNameErr;
                $stylistNameErr = $accCont->stylistNameErr;

                ?>
                <form action=" " method="post">

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label><b>First Name</b></label><span class="error" " >    *</span>
                            <input type="text" class="form-control" name="firsName" required>
                            <span class="error" " > <?= $fnameErr; ?> </span>
                        </div>

                        <div class="col-md-6 form-group">
                            <label ><b>Last Name</b></label><span class="error" " >    * </span>
                            <input type="text" class="form-control" name="lastName" required>
                            <span class="error" " > <?= $lastnameErr;?> </span>

                        </div>
                    </div>

                    <div class="form-group">
                        <label><b>Email</b></label><span class="error" " >    * </span>
                        <input type="email" class="form-control" name="email" required>
                        <span class="error" " >  <?=$emailErr;?>  </span>
                    </div>

                    <div class="form-group">
                        <label><b>Password</b></label><span class="error" " >    * </span>
                        <input type="password" class="form-control" name="password" required>
                        <span class="error" " >  <?= $passwrdErr;?>  </span>

                    </div>

<!--                    <div class="form-group">-->
<!--                        <label><b>Confirm Password</b></label>-->
<!--                        <input type="password" class="form-control" name="confpassword" required>-->
<!--                    </div>-->
                    <div class="row" style="margin-bottom: 10px">

                        <div class="col-md-6" >
                            <input type="checkbox" checked="checked" name="salon" value="Salon"><b>Salon</b><br>
                            <span class="error" " > <?= $accTypeErr?> </span>
                        </div>
                        <div class="col-md-6"  >
                            <input type="checkbox" name="stylist" value="Stylist"><b>Stylist</b>


                        </div>


                    </div>

                    <div class="form-group">
                        <label><b>Business Name for Salon</b></label><span class="error" " >    * </span>
                        <input type="text" class="form-control" name="bnameSalon" required >
                        <span class="error" " > <?= $salonNameErr?> </span>

                    </div>

                    <div class="form-group">
                        <label><b>Business Name for Stylist</b></label> <span class="error" " >    * </span>
                        <input type="text" class="form-control" name="bnameStylist" required>
                        <span class="error" " > <?= $stylistNameErr?> </span>
                    </div>

                    <input type="checkbox" value="1" checked="checked" name="preference"> I would like to receive promotion emails.
                    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                    <div align="right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width: 150px;">Close</button>
                        <button type="submit" class="btn btn-success" name="btn-signUp" style="width: 150px;">Sign Up</button>
                    </div>


                </form>

            </div>
            <div class="modal-footer">


            </div>
        </div>
    </div>
</div>