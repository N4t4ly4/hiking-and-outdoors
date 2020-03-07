<?php
session_start();
$errors='';
$errors = filter_input(INPUT_GET,'errors');
?>

<!DOCTYPE html>
<html>
<head>
 <title>Utah Hiking and Trails</title>
 <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<br/><br/>
<div class="form-background">
<form action="users/signup.php" method="post">
  Email Address: <input type="text" name="email" placeholder="email" size="10"> <br> <br>
  Desired Password: <input type="password" name="password" placeholder="Password" size="10"> <br> <br>
  <input type="hidden" name="action" value="signup"/>
  <input type="submit" value="Submit" /> 
  <div class="errors"> <br> <?=$errors?></div>
</form>
</div>