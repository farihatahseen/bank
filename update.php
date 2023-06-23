<?php

$id = $_GET['id'];
include_once "dbconnection.php";

$sql = "SELECT *
                FROM employee
                where $id=id";
$result = $conn->query($sql);
$rows = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Update your info</h1>
    <form action="ProcessUpdate.php" method="post">
        <p>
            <!-- <label for="id">id:</label> -->
            <input type="text" name="id" id="id" required hidden value="<?php echo $rows['id'] ?>">
        </p>
        <p>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required value="<?php echo $rows['name'] ?>">
        </p>

        <p>
            <label for="totalLeave">Total Leave:</label>
            <input type="text" name="totalLeave" id="totalLeave" required value="<?php echo $rows['totalLeave'] ?>">
        </p>

        <p>
            <label for="leaveTaken">Leave Taken:</label>
            <input type="text" name="leaveTaken" id="leaveTaken" required value="<?php echo $rows['leaveTaken'] ?>">
        </p>

        <p>
            <label for="salary">Salary:</label>
            <input type="text" name="salary" id="salary" required value="<?php echo $rows['salary'] ?>">
        </p>
        <p>
            <button>submit</button>
        </p>

    </form>
</body>

</html>