<?php
include_once "./vendor/autoload.php";

use Project\controllers\Student;

$student = new Student();

$studentInfo = $student->details($_GET['id']);
?>

<div style="width: 500px; margin:0 auto;">
    <table>
        <button><a href="./index.php">Back to Home</a></button>
        <td>
        <h1>Student Info</h1>
            <h2>ID: <?= $studentInfo['id'] ?></h2>
            <h2>Name: <?= $studentInfo['name']?></h2>
            <h2>Department: <?= $studentInfo['department'] ?></h2>
        </td>
    </table>
</div>