<?php

require_once "connectDB.php";
require_once "func.php";

function getUniAdmin($connect){
    $sql = "SELECT name,university_id FROM universities";
    $arr = GetData($connect,$sql);
  
    foreach ($arr as $value) {
      $getName = $value['name'];
      $getId = $value['university_id'];
      ?>
      <option value="1"><?php echo $getName; ?></option>
    <?php
  
    }
  
  }


  function addEv($connect){
    $status = $statusMsg = "";

    if(isset($_POST['addEvent'])){

        $uniName = $_POST['university_name'];
        $evName = $_POST['event_name'];
        $evDate = $_POST['event_date'];
        $evTime = $_POST['event_time'];
        $evVenue = $_POST['venue'];
        $evDescription = $_POST['description'];
        $ticketPrice = $_POST['ticket_price'];
        $noOfTickets = $_POST['num_of_tickets'];

        if(!empty($_FILES["image"]["name"])){
            $imgName = basename($_FILES["image"]["name"]);
            $imgType = pathinfo($imgName,PATHINFO_EXTENSION);

            $allowTypes=array('jpg','png','jpeg','gif','JPG');
            if(in_array($imgType,$allowTypes)){
                $image = $_FILES['image']['tmp_name'];
                $imgContent = addslashes(file_get_contents($image));

                $sql="SELECT university_id FROM universities WHERE name='$uniName';";
                $result = mysqli_execute_query($connect,$sql);

                $insert = $connect->query("INSERT INTO events (university_name, event_name, event_date, event_time, venue, description, image, ticket_price, max_tickets) VALUES 
                        ('$uniName', '$evName', '$evDate', '$evTime', '$evVenue', '$evDescription', '$imgContent', $ticketPrice, $noOfTickets);");

                if($insert){
                    $status = 'success';
                    echo $status;
                    $statusMsg = "file uploaded successfully";
                    exit();

                }else{
                    $statusMsg = "file upload failed";
                }
            }else {
                $statusMsg = 'sorry, only '.$allowTypes;
            }

        }else{
            $statusMsg="please select a file";
        }

    }

    echo $statusMsg;
  } 

  function getDetails($connect){
    $sql = "SELECT  event_id,university_name,event_name,event_date,event_time,venue,description,ticket_price ,max_tickets FROM events";

    $arr = GetData($connect,$sql);

    foreach ($arr as $value) {
        $eventId = $value['event_id'];
        $uniName = $value['university_name'];
        $eventName = $value['event_name'];
        $eventDate = $value['event_date'];
        $eventTime = $value['event_time'];
        $venue = $value['venue'];
        $desc = $value['description'];
        $ticketPrice = $value['ticket_price'];
        $maxTickets = $value['max_tickets'];

        ?>
        <tr>
        <td><?php echo $eventId; ?></td>
                <td><?php echo $uniName; ?></td>
                <td><?php echo $eventName; ?></td>
                <td><?php echo $eventDate; ?></td>
                <td><?php echo $eventTime; ?></td>
                <td><?php echo $venue; ?></td>
                <td><?php echo $desc; ?></td>
                <td><?php echo $ticketPrice; ?></td>
                <td><?php echo $maxTickets; ?></td>
    </tr>
        <?php

    }
  }

  function deleteEv($connect){

    if(isset($_POST['delEv'])){
        $evId = $_POST['eventId'];

        $sql = "DELETE FROM events WHERE event_id=$evId";
        $result = mysqli_execute_query($connect,$sql);

        if($result){
            echo "Deleted Successfully";
        }else{
            echo "The event id is not exist";
        }
    }

  }

  function updateEvents($connect){
    if(isset($_POST['updateEv'])){
        $evId = $_POST['event_id'];
        $uniName = $_POST['university_name'];
        $evName = $_POST['event_name'];
        $evDate = $_POST['event_date'];
        $evTime = $_POST['event_time'];
        $evVenue = $_POST['venue'];
        $evDescription = $_POST['description'];
        $ticketPrice = $_POST['ticket_price'];
        $noOfTickets = $_POST['num_of_tickets'];

        if(!empty($_FILES["image"]["name"])){
            $imgName = basename($_FILES["image"]["name"]);
            $imgType = pathinfo($imgName,PATHINFO_EXTENSION);

            $allowTypes=array('jpg','png','jpeg','gif','JPG');
            if(in_array($imgType,$allowTypes)){
                $image = $_FILES['image']['tmp_name'];
                $imgContent = addslashes(file_get_contents($image));

                $insert = $connect->query("UPDATE events SET university_name='$uniName', event_name='$evName', event_date='$evDate', event_time='$evTime', venue='$evVenue', description='$evDescription', image='$imgContent', ticket_price=$ticketPrice, max_tickets=$noOfTickets WHERE event_id=$evId;");

                if($insert){
                    $status = 'success';
                    echo $status;
                    $statusMsg = "file updated successfully";
                    exit();

                }else{
                    $statusMsg = "file update failed";
                }
            }else {
                $statusMsg = 'sorry, only '.$allowTypes;
            }

        }else{
            $statusMsg="please select a file";
        }
    }
  }


?>