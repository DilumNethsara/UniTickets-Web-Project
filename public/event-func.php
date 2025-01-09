<?php

require_once "../public/func.php";
require_once "../public/connectDB.php";

function getUniName($connect,$id){
    $sql = "SELECT name FROM universities WHERE university_id=$id";
    $result = mysqli_execute_query($connect,$sql);

    while($row=mysqli_fetch_assoc($result)){
        foreach ($row as $key => $value) {
            echo $value;
        }
    }
}

function setEventDetails($connect,$id){
    $sql1 = "SELECT event_name,event_date,event_time,venue,image,ticket_price,description FROM events WHERE event_id=$id;";
    $arr=GetData($connect,$sql1);

    foreach ($arr as $value) {

        $evName = $value['event_name'];
        $evDate = $value['event_date'];
        $evTime = $value['event_time'];
        $venue = $value['venue'];
        $image = $value['image'];
        $price = $value['ticket_price'];
        $desc = $value['description'];

        ?>
        

        <div class="container text-center">
      <div class="row">
        <div class="col">
          <div class="container text-center">
            <div class="row">
              <div class="col">
                <h2 class="event-title"><?php echo $evName; ?></h2>
              </div>
              <div class="container">
                <table class="table text-center">
                  <tbody>
                    <tr>
                      <th scope="row">Date</th>
                      <td><?php echo $evDate; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">Time</th>
                      <td><?php echo $evTime; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">Location</th>
                      <td><?php echo $venue; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">Prices</th>
                      <td>
                        <?php echo $price; ?>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="text-center">
                <h3>About the Event</h3>
                <p>
                  <?php echo $desc; ?>
                </p>
              </div>
              <div class="ticket-section"></div>
            </div>
          </div>
        </div>
        <div class="col">
          <div style="margin: 30px">
            <img
              src='data:img/jpg;charset=utf8;base64,<?php echo base64_encode($image); ?>'
              class="card-img-top"
              alt="..."
              style="width: 20rem; border-radius: 10px"
            />
          </div>
          <div style="margin: 20px">
            <a href="checkout.php?event_id=<?php echo $id; ?>" class="btn btn-secondary" style="width: 20rem"
              >BOOK NOW!</a
            >
          </div>
        </div>
      </div>
    </div>
        <?php
        
    }

    
}


?>