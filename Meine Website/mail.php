<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$result = '<div class="alert alert-success">Thank You! I will be in touch</div>';
header('Content-Type: application/json');
if ($name === ''){
  print json_encode(array('message' => 'Name kann nicht leer sein', 'code' => 0));
  exit();
}
if ($email === ''){
  print json_encode(array('message' => 'Email kann nicht leer sein', 'code' => 0));
  exit();
} else {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
  exit();
  }
}
if ($subject === ''){
  print json_encode(array('message' => 'Betreff kann nicht leer sein', 'code' => 0));
  exit();
}
if ($message === ''){
  print json_encode(array('message' => 'Nachricht kann nicht leer sein', 'code' => 0));
  exit();
}
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "nikosmoshonas@nikosmoshonas.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
print json_encode(array('message' => 'Erfolgreich gesendet', 'code' => 1));
exit();
?>
