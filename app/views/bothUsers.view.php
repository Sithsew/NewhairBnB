<?php require('partials/header.php') ;
    session_start();

    if (isset($_SESSION['id'])){
        $firstname = ucwords($_SESSION['firstname']);
        $lastname =ucwords($_SESSION['lastname']);
?>

        <div>
            <div style="padding: 3%" align="center">
                <h1>Welcome to Hair BnB,</h1>
                <h3><? echo $firstname." " .$lastname?></h3>

                <h4 style="padding: 20px">
                <h4><a href="/welcome">Home</a></h4>
                <h4><a href="/stylist">Stylist Account</a></h4>
                <h4><a href="/salon">Salon Account</a></h4>

            </div>
        </div>
    <?php }else { ?>
        <div style="margin: 50px">
            <h4 align="center" style="margin-top: 400px">Please Login to your account</h4>
        </div>


<?php };
    require('partials/footer.php')
?>
