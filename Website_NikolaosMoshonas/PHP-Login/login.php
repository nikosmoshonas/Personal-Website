<!DOCTYPE HTML>
<html>
<head>
<title>PHP-Login</title>

<!-- bootstrap-3.3.7 -->
<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

<!-- JQUERY -->
<script type="text/javascript" language="javascript" src="jquery/jquery.js"></script>

<link href="style/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script type="text/javascript" language="javascript" src="style/style.js"></script>

</head>
<body>







<div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="img/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input  type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                <input   type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"  name="login">Sign in</button>

                <button onclick="location.href = 'register.php';" class="btn btn-lg btn-primary btn-block btn-signin" type="submit"  name="nothing">REGISTER</button>

               
            </form>

        </div>
</div>

</body>
</html>
<?php

IF(ISSET($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];



	require_once 'db_con.php';

	$db = new DB_Connect();
	$conn = $db->connect();

	$hash = md5($password);


	$query = "SELECT * FROM user_login WHERE email like '$email' AND password = '$hash'";
	$result = mysqli_query($conn, $query);
	IF(mysqli_num_rows($result) > 0)
	{
		$data = mysqli_fetch_array($result);
		session_start();
		$_SESSION['email'] = $data['email'];
		//$_SESSION['name'] = $data['full_name'];
		echo "<script language=\"javascript\">alert(\"welcome \");document.location.href='index.php';</script>";
	}else{
		echo "<script language=\"javascript\">alert(\"Invalid username or password\");document.location.href='login.php';</script>";

	}
}
?>
