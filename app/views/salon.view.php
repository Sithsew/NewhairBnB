<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Hair BnB</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


</head>

<body>
<!--    header-->
<nav class="navbar fixed-top navbar-inverse bg-inverse">
    <a class="navbar-brand" href="#">Hair BnB</a>
    <div class="navbar-nav mr-auto mt-2 mt-lg-0 navbar-toggler-right">
        <a class="btn my-2 my-sm-0" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <img src="../images/settings.png" style="width: 28px">
        </a>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-8 ">

            <div id="Calendar" class="tabcontent " style="margin: 0px">
                <h3> Calendar</h3>
            </div>

            <div id="Request" class="tabcontent">
                <h3>Request</h3>
            </div>

            <div id="Appointment" class="tabcontent">
                <h3>Appointment</h3>
            </div>

            <div class="row " >
                <div class="col-md-12">

                    <div class="col-md-4 tablink">
                        <button class="tablink " onclick="openCity('Calendar', this, 'red')" id="defaultOpen"  >Calendar</button>
                    </div>
                    <div class="col-md-4 tablink">
                        <button class="tablink" onclick="openCity('Request', this, 'green')">Request</button>
                    </div>
                    <div class="col-md-4 tablink">
                        <button class="tablink" onclick="openCity('Appointment', this, 'blue')">Appointment</button>

                    </div>

                </div>
            </div>

        </div>

        <div class="col-md-4">

        </div>
    </div>


    <script>
        document.getElementById("defaultOpen").click();
    </script>


</div>

</body>

</html>















