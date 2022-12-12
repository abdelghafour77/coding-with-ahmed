<?php
include 'Models/User.php';
include 'Models/Classroom.php';


$user = new User();
$user->name = "youssef";
$user->email = "youssef@gmail.com";
$user->save();


$Classroom = new Classroom();
$Classroom->name = "Phoenix";
$Classroom->save();

// include 'Database.php';
// $data = "INSERT INTO users VALUES(NULL, '$user->name','$user->email')";
// Database::executeQuery($data);
