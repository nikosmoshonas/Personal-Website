<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Bootstrap Login</title>

<!-- bootstrap-3.3.7 -->
<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

<!-- JQUERY -->
<script type="text/javascript" language="javascript" src="jquery/jquery.js"></script>

<link href="style/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" language="javascript" src="style/style.js"></script>

</head>
<body>

<div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="img/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" id="inputPassword" name="password_1" class="form-control" placeholder="Password" required>
                <br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"  name="reg_user">Register</button>
            </form>
            
        </div>
</div>

</body>
</html>


<?php
// initializing variables

$email    = "";
$errors = array(); 

// connect to the database
require_once 'db_con.php';
$db = new DB_Connect();
$conn = $db->connect();

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (strlen($password_1) < 5) {
	array_push($errors, "Password too short");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user_login WHERE email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }

    
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password =md5($password_1);//encrypt the password before saving in the database
	

  	$query = "INSERT INTO user_login (email, password) 
  			  VALUES('$email', '$password')";
  	mysqli_query($conn, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
	
	echo "<script language=\"javascript\">alert(\"Success \");document.location.href='login.php';</script>";
  	//header('location: login.php');
}else{
		echo "<script language=\"javascript\">alert(\"Error \");document.location.href='register.php';</script>";

}

}
?>