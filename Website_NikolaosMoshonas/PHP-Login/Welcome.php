<?php
session_start();
IF(ISSET($_SESSION['email'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PHP-Login</title>




    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">


    <!-- Bootstrap core CSS -->
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">






</head>


    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar bg-primary">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>

            </ul>

        </div>
    </nav>

    <!--Main layout-->
    <main>

        <div class="container-fluid">

            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>
            <h1>Scroll down</h1>
            <br>

        </div>

    </main>




    <!--Main layout-->

    <!-- SCRIPTS -->
    <!-- JQuery -->

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>







</body>

</html>
<?php
}else{
	echo "<script language=\"javascript\">alert(\"Please login\");document.location.href='login.php';</script>";
}
?>
