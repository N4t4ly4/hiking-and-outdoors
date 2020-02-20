<?php
session_start();
require('../model/users_db.php');
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
   $action = filter_input(INPUT_GET, 'action');
   if ($action == NULL) {
       $action = 'list_users';
   }
}
if ($action == 'list_users') {
   $users = get_users();
   include('users_list.php');
}
elseif($action == 'login'){  
   $email = filter_input(INPUT_POST,'email');
   $password = filter_input(INPUT_POST,'password');
   $user = login($email, $password);
   var_dump($user);
   if($user == NULL){
       header("Location: /hiking-and-trails/login.php?errors=Missing login credentials.");
   } else{
       $_SESSION['email'] = $user['email'];
       $_SESSION['user_id'] = $user['user_id'];
       header('Location: /Hiking-and-Trails/index.php');
   }
}
?>