<?php
session_start();

$date = "";
$dd_number = "";
$user_from = "";
$user_to = "";
$amount_n = "";
$amount_w = "";
$bank_name = "";
$branch_name = "";
$purpose = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', 'arabind123', 'registration');

if (isset($_POST['register'])) {
    $date = mysqli_real_escape_string($db, $_POST['date']);
    $dd_number = mysqli_real_escape_string($db, $_POST['dd_number']);
    $user_from = mysqli_real_escape_string($db, $_POST['user_from']);
    $user_to = mysqli_real_escape_string($db, $_POST['user_to']);
    $amount_n = mysqli_real_escape_string($db, $_POST['amount_n']);
    $amount_w = mysqli_real_escape_string($db, $_POST['amount_w']);
    $bank_name = mysqli_real_escape_string($db, $_POST['bank_name']);
    $branch_name = mysqli_real_escape_string($db, $_POST['branch_name']);
    $purpose = mysqli_real_escape_string($db, $_POST['purpose']);

  $user_check_query = "SELECT * FROM users WHERE dd_number='$dd_number'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) {
    if ($user['dd_number'] === $dd_number) {
        header('location: register.html');
    }
  }

  if (count($errors) == 0) {

  	$query = "INSERT INTO users (date, dd_number, user_from, user_to, amount_n, amount_w, bank_name, branch_name, puprose) 
  			  VALUES('$date', '$dd_number', '$user_from', '$user_to', '$amount_n', '$amount_w', '$bank_name', '$branch_name', '$purpose')";
  	mysqli_query($db, $query);
  	header('location: login.html');
  }
}
?>
