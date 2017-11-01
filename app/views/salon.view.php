<?php require('partials/header.php');
    session_start();
    if (isset($_SESSION['id'])){
        $firstname = ucwords($_SESSION['firstname']);
        $lastname =ucwords($_SESSION['lastname']);
        $role = $_SESSION['user_role'];
?>

    <div class="container" style="padding: 3%">
        <div align="center">
            <h1>Welcome to Hair BnB,</h1>
            <h3 style="padding: 5px"><?=$firstname." " .$lastname?></h3>
            <h4>This is your Salon Account</h4>

            <?php if ($role==="3"){
                ?>
                <h4><a href="/welcome">Home</a></h4>
                <h4><a href="/stylist">Stylist Account</a></h4>


            <?php } ?>
        </div>
    </div>
<?php }else {?>
    <div style="margin: 50px">
        <h4 align="center" style="margin-top: 400px">Please Login to your account</h4>

    </div>
<?php };
    require('partials/footer.php') ?>














