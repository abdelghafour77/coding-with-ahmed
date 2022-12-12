<?php

include 'Models/model.php';
class User extends  Model
{
      public static $db_table = 'users';
      // public function save()
      // {

      //       $data = "INSERT INTO users VALUES(NULL, '$this->name','$this->email')";
      //       Database::executeQuery($data);
      // }
}

