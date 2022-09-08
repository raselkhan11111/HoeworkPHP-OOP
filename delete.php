<?php
include_once "./vendor/autoload.php";

// Project\Controllers is namespace here
use Project\controllers\Student;

$student = new Student();

$student->destroy($_GET['id']);

header('Location: ./index.php');


