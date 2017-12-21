<?php require('partials/header.php') ;
    session_start();

    if (isset($_SESSION['id'])){
        $firstname = ucwords($_SESSION['firstname']);
        $lastname =ucwords($_SESSION['lastname']);
?>

        <div>
            <div style="padding: 3%" align="center">
                <a href="/welcome"><img src="../public/images/home.png" style="height: 40px;"align="right" ></a>
                <h1>Welcome to Hair BnB,</h1>
                <h3><? echo $firstname." " .$lastname?></h3>

                <h2> Select Where You Want to Go</h2>
                  <div class="row">
                      <div class="col-md-3"  align="center">

                      </div>
                      <div class="col-md-3" align="center" style="padding: 70px">
                          <a href="/stylist"><img src="../public/images/stylistAcc.jpg" style="height: 210px;"align="right" ></a>
                      </div>
                      <div class="col-md-3" align="center" style="padding: 70px">
                          <a href="/salon"><img src="../public/images/salonAcc.jpg" style="height: 210px;"align="right" ></a>
                      </div>
                  </div>

            </div>
        </div>
    <?php }else { ?>
        <div style="margin: 50px">
            <h4 align="center" style="margin-top: 400px">Please Login to your account</h4>
        </div>


<?php };
    require('partials/footer.php')
?>
