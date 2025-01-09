<?php

require_once '../public/func.php';
require_once '../public/connectDB.php';

function getAmount($connect,$id){
    $sql = "SELECT ticket_price FROM events WHERE event_id=$id;";
    $arr = GetData($connect,$sql);

    foreach ($arr as $value) {
        $price = $value['ticket_price'];
    }
    return $price;
}

function getTitle($connect,$id){
    $sql = "SELECT event_name FROM events WHERE event_id=$id;";
    $arr = GetData($connect,$sql);

    foreach ($arr as $value) {
        $name = $value['event_name'];
    }
    return $name;
}

function getUni($connect,$id){
    $sql = "SELECT university_name,venue FROM events WHERE event_id=$id;";
    $arr = GetData($connect,$sql);

    foreach ($arr as $value) {
        $name = $value['university_name'];
        $venue = $value['venue'];
    }
    return $venue." - ".$name;
}

function getDateTime($connect,$id){
    $sql = "SELECT event_date,event_time FROM events WHERE event_id=$id;";
    $arr = GetData($connect,$sql);

    foreach ($arr as $value) {
        $date = $value['event_date'];
        $time = $value['event_time'];
    }
    return "<h2>DATE</h2>
    <p>.$date.</p>
    <h2>TIME</h2>
    <p>.$time.</p>";
}


?>