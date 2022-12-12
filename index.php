<?php
include 'Models/User.php';
include 'Models/Classroom.php';


$user = new User();
$user->name = "meddiche";
$user->email = "meddiche@gmail.com";
$user->birthdate = "2023-11-01";
$user->save();


$Classroom = new Classroom();
$Classroom->name = "namek";
$Classroom->save();

// include 'Database.php';
// $data = "INSERT INTO users VALUES(NULL, '$user->name','$user->email')";
// Database::executeQuery($data);
