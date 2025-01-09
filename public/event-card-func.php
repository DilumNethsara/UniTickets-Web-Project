<?php

require_once "../public/func.php";
require_once "../public/connectDB.php";

function showCards($connect,$uniId){
        $sql = "SELECT name FROM universities WHERE university_id=$uniId;";
        $result = mysqli_execute_query($connect,$sql);
    
        while($row=mysqli_fetch_assoc($result)){
            foreach ($row as $key => $value) {
                $uni = $value;
                $sql1 = "SELECT event_name,event_date,event_time,venue,event_id,image FROM events WHERE university_name='$uni';";
                $arr=GetData($connect,$sql1);

                foreach ($arr as $value) {
                    $evName = $value['event_name'];
                    $evDate = $value['event_date'];
                    $evTime = $value['event_time'];
                    $venue = $value['venue'];
                    $evId = $value['event_id'];
                    $image = $value['image'];?>

                    <div class="col">
                        <div class="card" style="width: 18rem">
                        <img src='data:img/jpg;charset=utf8;base64,<?php echo base64_encode($image); ?>' class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $evName; ?></h5>
                            <p class="card-text">
                            <?php echo $evDate; ?><br /><?php echo $evTime; ?>
                <br /><?php echo $uni; ?><br /><?php echo $venue; ?>
                            </p>
                            <a href="event-details.php?event_id=<?php echo $evId; ?>" class="btn btn-primary">Book Now >></a>
                        </div>
                        </div>
                    </div>
          
          <?php
                }

            }
        }
}



?>