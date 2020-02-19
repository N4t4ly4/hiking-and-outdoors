<?php
require('database.php');

function get_users() {
   global $db;
   $query = 'SELECT user_id, email FROM users';
   $statement = $db->prepare($query);
   $statement->execute();
   $users = $statement->fetchAll();
   $statement->closeCursor();
   return $users;
}

function login($email, $password){
   global $db;
   $query = 'SELECT Userid, email FROM users WHERE email = :email 
   AND password = :password';
   #AND password = md5(:password)'; -change to this later
   $statement = $db->prepare($query);
  
   $statement->bindParam(':email', $email);
   $statement->bindParam(':password', $password);   
          
   $statement->execute();
   $user = $statement->fetch(PDO::FETCH_BOTH);
   $statement->closeCursor();
   //var_dump($user);
   return $user;   
}