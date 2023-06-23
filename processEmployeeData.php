<?php

$name = $_POST['name'];
$totalLeave = $_POST['totalLeave'];
$leaveTaken = $_POST['leaveTaken'];
$salary = $_POST['salary'];


if (is_numeric($totalLeave)) {
    if ($totalLeave > 0) {
        if (is_numeric($leaveTaken)) {
            if ($leaveTaken > 0 && $leaveTaken<=$totalLeave) {
                if (is_numeric($salary)) {

                    if ($salary > 0) {
                        include_once "dbconnection.php";

                        $sql = "INSERT INTO employee (name,totalLeave,leaveTaken,salary)
                                    VALUES ('$name',$totalLeave,$leaveTaken,$salary)";

                        if ($conn->query($sql) === TRUE) {


?>
                            success!!
                            <a href="index.html">go to home page</a>
<?php

                        } else {
                            echo "<br>Unsuccessful Cancel";
                        }
                    } else {
                        echo "non negative value allowed only ";
                    }
                } else {
                    echo "salary should have only Numeric value";
                }
            } else {
                echo "non negative value allowed only or leave taken is grerater !";
            } 
        } else {
            echo "Leave Taken should have only Numeric value";
        }
    } else {
        echo "non negative value allowed only";
    }
} else {
    echo "Total Leave should have only Numeric value";
}



?>