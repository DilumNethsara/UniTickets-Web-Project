<?php

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

?>