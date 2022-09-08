<?php

include_once "./vendor/autoload.php";

use Project\controllers\Student;

$student = new Student();

$updateStudentInfo = $student->details($_GET['id']);

echo '<pre>';
print_r($updateStudentInfo);
?>

<div style="width: 500px; margin:0 auto;">
    <h1>Update Student Info</h1>
    <form action="./store.php" method="post">
                <input name="id" placeholder="<?= $updateStudentInfo['id'] ?>">
                <input name="name" placeholder="<?= $updateStudentInfo['name'] ?>">
                <input name="department" placeholder="<?= $updateStudentInfo['department'] ?>">
                <button>Update</button>
    </form>
</div>