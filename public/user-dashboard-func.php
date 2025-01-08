<?php

require_once "func.php";

function updateUserDetails($connect,$getUid){
    if(isset($_POST['svUserDetails'])){
        $uName = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql = "UPDATE users SET username='$uName', email='$email', phone_number='$phone' WHERE user_id=$getUid;";
        
        $check = mysqli_execute_query($connect,"SELECT email FROM users;");

        $isExist = false;

        while($row=mysqli_fetch_assoc($check)){
            foreach ($row as $key => $value) {
                if($value==$email){
                    $isExist = true;
                    echo "This Email is already registered";
                    break;
                }else{
                    $isExist = false;
                }
            }
        }

        if(!$isExist){
            $result = mysqli_execute_query($connect,$sql);

        if($result){
            echo "Saved successfully!";
        }else{
            echo "Something went wrong!";
        }
        }

    }
}

function updatePassword($connect,$uid){
    if(isset($_POST['updatePw'])){
        $currentPw=$_POST['current-password'];
        $newPw = $_POST['new-password'];
        $confirmPw = $_POST['confirm-password'];

        $getCurrentPw = "SELECT password FROM users WHERE user_id=$uid;";

        $currentPwResult = mysqli_execute_query($connect,$getCurrentPw);

        while ($row = mysqli_fetch_assoc($currentPwResult)) {
            foreach ($row as $key => $value) {
                if ($currentPw==$value) {
                    if($newPw==$confirmPw){
                        $update = "UPDATE users SET password='$newPw' WHERE user_id=$uid;";
                        $updateResult = mysqli_execute_query($connect,$update);
                        if($updateResult){
                            echo "Updated Successfully";
                        }else{
                            echo "Something went wrong";
                        }
                    }else{
                        echo "Passwords are miss matched";
                    }
                }else{
                    echo "Invalid current password";
                }
            }
        }
        
    }
}

function addCard($connect,$uid){
    if(isset($_POST['addCard'])){
        $name = $_POST['card-name'];
        $cardNo = $_POST['card-number'];
        $date = $_POST['expiry-date'];
        $cvv = $_POST['cvv'];

        $userId = "SELECT user_id FROM User_Cards;";

        $resultId = mysqli_execute_query($connect,$userId);
        $status = false;

        while($row=mysqli_fetch_assoc($resultId)){
            foreach ($row as $key => $value) {
                if($uid==$value){
                    $sql = "UPDATE User_Cards SET card_number='$cardNo', cardholder_name='$name', expiry_date='$date', cvv='$cvv' WHERE user_id=$uid;";
                    if(mysqli_execute_query($connect,$sql)){
                        echo "Card updated successfully";
                    }else{
                        echo "Something went wrong";
                    }
                    $status=true;
                    break;
                }else{
                    $status = false;
                }
            }
        }

        if(!$status){
            $sql = "INSERT INTO User_Cards VALUES('$uid','$cardNo','$name','$date','$cvv');";
                    if(mysqli_execute_query($connect,$sql)){
                        echo "Card added successfully";
                    }else{
                        echo "somthing went wrong";
                    }
        }
    }
}


function contatcAdmin($connect, $uid){
    if(isset($_POST['sendMsg'])){
        $name = $_POST['user-name'];
        $email = $_POST['user-email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sql = "INSERT INTO Contact_Admin VALUES('','$name','$email','$subject','$message');";
        $result = mysqli_execute_query($connect,$sql);

        if($result){
            echo "Message sent successfully";
        }else{
            echo "Something went wrong";
        }
    }
}

function viewHistory($connect,$uid){

    $sql = "SELECT user_id,event_id,tickets_booked,total_price,booking_date,paymentStatus FROM bookings;";

    $arr = GetData($connect,$sql);

    foreach ($arr as $value) {
        $getUid = $value['user_id'];
        $getEvId = $value['event_id'];
        $getCount = $value['tickets_booked'];
        $price = $value['total_price'];
        $date = $value['booking_date'];
        $paymentStatus = $value['paymentStatus'];

        if($getUid==$uid){
            $sql1 = "SELECT event_name,university_id FROM events WHERE event_id=$getEvId;";
            $arr2 = GetData($connect,$sql1);

            foreach ($arr2 as $value) {
                $uniId = $value['university_id'];
                $eveName = $value['event_name'];

                $sql2 = "SELECT name FROM universities WHERE university_id=$uniId;";
                $result = mysqli_execute_query($connect,$sql2);

                $uniName = '';

                if ($result && $row = mysqli_fetch_assoc($result)) {
                    $uniName = $row['name'];
                }

                if($uniName){

                    ?>

                        <div class="history-item">
                            <div class="item-details">
                            <h4><?php echo $eveName; ?></h4>
                            <p><strong>Booked Date:</strong> <?php echo $date; ?></p>
                            <p><strong>University:</strong> <?php echo $uniName; ?></p>
                            <p><strong>Ticket Count : </strong> <?php echo $getCount; ?></p>
                            </div>
                            <div class="item-status">
                            <p>
                                <strong>Status:</strong> <span class="status-paid"><?php echo $paymentStatus; ?></span>
                            </p>
                            <p><strong>Amount:</strong> Rs. <?php echo $price; ?></p>
                            </div>
                        </div>
                <?php
                    
                }
            }

        }
    }

}

?>