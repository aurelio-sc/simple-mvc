<?php

namespace Controllers;

use Models\User;

class AddUser
{
   public static function add(): void
   {
    $user = new User;
    $data = $_POST;
    if (isset($data['name']) && isset($data['email']) && isset($data['password']))    
        $user->setName($data['name']);    
        $user->setEmail($data['email']);    
        $user->setPassword($data['password']);
        $user->addUserToDatabase();
   }
}