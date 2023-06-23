<?php

    $id=$_GET['id'];
    
    include_once "dbconnection.php";


    $sql = "DELETE FROM employee  
            WHERE id=$id";                          //table name = info

    if ($conn->query($sql) === TRUE) {
        header("Location: http://localhost/bank/read.php");
    }else{
        echo "<br>Unsuccessful Cancel";
    }

?>