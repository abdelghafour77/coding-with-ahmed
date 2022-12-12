<?php

class Database
{
      private $host = "localhost";
      static private $user = "root";
      static private $pwd = "";
      private $db = "youssef";

      public static function connect()
      {
            $dbh = new PDO('mysql:host=localhost;dbname=youssef', self::$user, self::$pwd);
            if (!$dbh) {
                  die("error in connecting to database");
            } else {
                  return $dbh;
            }
      }
      public static function executeQuery($sql)
      {
            $stmt = self::connect();
            $query = $stmt->query($sql);
            return $query;
      }
}
