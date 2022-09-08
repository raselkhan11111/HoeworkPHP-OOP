<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo 'Only Post Request Allow Here';
    die(); //die()
}
   
   //include_once './app/controllers/student.php';

    // vendor/autoload.php

   include_once "./vendor/autoload.php";

    // Project\Controllers is namespace here
   use Project\controllers\Student;

   $student = new Student();

   $student->store($_POST);

    header('Location: ./index.php');


    ?>
