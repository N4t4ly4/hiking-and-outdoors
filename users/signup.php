<?php
session_start();
require('../model/users_db.php');
$action = filter_input(INPUT_POST, 'action');

if($action == 'signup'){  
   $email = filter_input(INPUT_POST,'email');
   $password = filter_input(INPUT_POST,'password');
    if ($email == NULL || $password == NULL) {
        header("Location: /hiking-and-trails/signup.php?errors=Please Enter Both an Email and Password.");
    }

   $user = signUp($email, $password);
}
?>