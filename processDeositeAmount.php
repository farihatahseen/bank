<?php

$id = $_POST['id'];
$amount = $_POST['amount'];
$valid_id_flag = false;

if($id>0 && is_numeric($id)){

//id checking
include_once "dbconnection.php";
$sql = "SELECT *
            FROM employee";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($rows = $result->fetch_assoc()) {
        if ($id == $rows['id']) {
            $valid_id_flag = true;
        }
    }
} else {
    echo "No data found";
}


if ($valid_id_flag) {
    include_once "dbconnection.php";
    $sql = "SELECT *
                FROM employee
                where id=$id";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    $currentAmount = $rows['salary'];



    if ($amount > 5000) {
        $currentAmount += $amount;
        include_once "dbconnection.php";
        $sql = "UPDATE employee
                SET salary=$currentAmount
                WHERE id=$id";

        if ($conn->query($sql) === TRUE) {


?>
            deposite success!!
            <a href="read.php">go to read page</a>
<?php

        } else {
            echo "<br>Unsuccessful Cancel";
        }
    } else {
        echo "You cant deposite below 5000 tk";
    }

} else {
    echo "Id is not varified";
}
}else{
    echo "please try non zero,positive integer id";
}

?>