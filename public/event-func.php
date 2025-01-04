<?php

require_once "connectDB.php";
require_once "func.php";

function getUniName($connect,$id){
    $sql = "SELECT name FROM universities WHERE university_id=$id";
    $result = mysqli_execute_query($connect,$sql);

    while($row=mysqli_fetch_assoc($result)){
        foreach ($row as $key => $value) {
            echo $value;
        }
    }
}


?>