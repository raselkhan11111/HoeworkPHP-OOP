<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
    
    <?php
    session_start();
    //include_once './store.php';
    $students = $_SESSION['students'];
    ?>

    <div class="container p-3 my-5">

    <form action="./store.php" method="post">
            <input name="id" placeholder="Student ID">
            <input name="name" placeholder="Student Name">
            <input name="department" placeholder="Department">
            <input name="semister" placeholder="Semister">
            <input name="facalty" placeholder="Fcalty">
            <input name="gpa" placeholder="GPA">
            <button>Add</button>
    </form>

    <?php
        if (isset($_SESSION['massage'])) {
            echo $_SESSION['massage'];
            unset($_SESSION['massage']);
        }
    ?> 


    <table class="table table-light table-hover my-5">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Department</th>
                <th>Semister</th>
                <th>Facalty</th>
                <th>GPA</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($students as $student) { ?>

            <tr>
                <td><?= $student['id'] ?></td>
                <td><?=$student['name'] ?></td>
                <td><?=$student['department'] ?></td>
                <td><?=$student['semister'] ?></td>
                <td><?=$student['facalty'] ?></td>
                <td><?=$student['gpa'] ?></td>
                <td>
                    <a class="btn btn-primary" href="show.php?id=<?= $student['id'] ?>">Show</a>
                    <a class="btn btn-info" href="update.php?id=<?= $student['id'] ?>">Update</a>
                    <a class="btn btn-danger" href="delete.php?id=<?= $student['id'] ?>" onclick="return confirm('Are You sure Want to Delete ?')">Delete</a>

                    <!-- id= $student['id'] -->
                </td>
            </tr>

            <?php } ?>
        </tbody>
    </table>


    </div>

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>