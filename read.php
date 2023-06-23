<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
</head>

<body>
    <h1>Employee info</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Total Leave</th>
            <th>Leave Taken</th>
            <th>Salary</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>

        <?php
        include_once "dbconnection.php";
        //sql_quary

        $sql = "SELECT *
                FROM employee";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {


        ?>
                <tr>
                    <td><?php echo $rows['id'] ?></td>
                    <td><?php echo $rows['name'] ?></td>
                    <td><?php echo $rows['totalLeave'] ?></td>
                    <td><?php echo $rows['leaveTaken'] ?></td>
                    <td><?php echo $rows['salary'] ?></td>
                    <td><a href="delete.php?id=<?php echo $rows['id'] ?>">delete</a></td> <!-- delete -->
                    <td><a href="update.php?id=<?php echo $rows['id'] ?>">edit</a></td> <!-- update -->
                </tr>
        <?php

            }
        } else {
            echo "No data found";
        }


        ?>

    </table>

    <p>
        <a href="index.html">Home Page</a>
    </p>



</body>

</html>