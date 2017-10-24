<?php require('partials/header.php') ?>


<h1> all users</h1>


    <form action="/users" method="post">

        <div class="row">
            <div class="col-md-6 form-group">
                <label><b>First Name</b></label>
                <input type="text" class="form-control" name="firstname" required="true">

            </div>

            <div class="col-md-6 form-group">
                <label ><b>Last Name</b></label>
                <input type="text" class="form-control" name="lastname" required>

            </div>
        </div>

        <div class="form-group">
            <label><b>Email</b></label>
            <input type="email" class="form-control" name="email" required>

        </div>

        <div class="form-group">
            <label><b>Password</b></label>
            <input type="password" class="form-control" name="pass" required>
        </div>

        <div class="form-group">
            <label><b>Confirm Password</b></label>
            <input type="password" class="form-control" name="confpass" required>
        </div>

        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-6" >
                <input type="checkbox" checked="checked" name="account_type" value="Salon"><b>Salon</b><br>
            </div>
            <div class="col-md-6"  >
                <input type="checkbox" name="account_type" value="Stylist"><b>Stylist</b>
            </div>
        </div>

        <div class="form-group">
            <label><b>Business Name </b></label>
            <input type="text" class="form-control" name="Bname1" required>
        </div>

        <div class="form-group">
            <label><b>Business Name for Stylist</b></label>
            <input type="text" class="form-control" name="Bname2" required>
        </div>

        <input type="checkbox" checked="checked"> I would like to receive promotion emails.
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <div align="right">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width: 150px;">Close</button>
            <button type="submit" class="btn btn-success" name="btn-signUp" style="width: 150px;">Sign Up</button>
        </div>


    </form>


<h2>submit your responsse</h2>


<!--    <form method="POST" action="/users">-->
<!--        <input name="name">-->
<!--        <button type="submit">ok</button>-->
<!--    </form>-->



<?php require('partials/footer.php') ?>