
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
                <form action="/welcome" method="post">

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label><b>First Name</b></label>
                            <input type="text" class="form-control" name="firsName" required="true">
                        </div>

                        <div class="col-md-6 form-group">
                            <label ><b>Last Name</b></label>
                            <input type="text" class="form-control" name="lastName" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label><b>Email</b></label>
                        <input type="email" class="form-control" name="email" required>
                    </div>

                    <div class="form-group">
                        <label><b>Password</b></label>
                        <input type="password" class="form-control" name="password" required>
                    </div>

<!--                    <div class="form-group">-->
<!--                        <label><b>Confirm Password</b></label>-->
<!--                        <input type="password" class="form-control" name="confpassword" required>-->
<!--                    </div>-->

                    <div class="row" style="margin-bottom: 10px">
                        <div class="col-md-6" >
                            <input type="checkbox" checked="checked" name="salon" value="Salon"><b>Salon</b><br>
                        </div>
                        <div class="col-md-6"  >
                            <input type="checkbox" name="stylist" value="Stylist"><b>Stylist</b>
                        </div>
                    </div>

                    <div class="form-group">
                        <label><b>Business Name for Salon</b></label>
                        <input type="text" class="form-control" name="bnameSalon" required>
                    </div>

                    <div class="form-group">
                        <label><b>Business Name for Stylist</b></label>
                        <input type="text" class="form-control" name="bnameStylist" required>
                    </div>

                    <input type="checkbox" checked="checked"> I would like to receive promotion emails.
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