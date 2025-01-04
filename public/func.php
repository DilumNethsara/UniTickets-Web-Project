<?php

require_once "connectDB.php";

function GetData($connect,$query){
	$arr = array();
	try {
		$sql = $query;
		$result = mysqli_query($connect,$sql);	
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($arr,$row);
		}
	} catch (Exception $e) {
		$arr = null;
		die($e->getMessage());
	}
	return $arr;
}

function signupInsert($connect,$uName,$email,$password){
    $currentDate = date("Y/m/d");
    $sql = "INSERT INTO users VALUES('','$uName','$password','$email','','','user','false','','$currentDate');";
    $result = mysqli_execute_query($connect,$sql);
    if($result){
        echo "Success!";
    }else{
        echo "Something went wrong";
    }
}

function signup($connect){
    if(isset($_POST['submit'])){
        $uName = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cPassword = $_POST['confirmPassword'];

        $check = mysqli_execute_query($connect,"SELECT email FROM users");

        $state = true;
        if($password!=$cPassword){
            echo "<b>Password doesn't match</b>";
            exit();
        }else{
            if(mysqli_num_rows($check)>0){
                while($row = mysqli_fetch_assoc($check)){
                    foreach ($row as $key => $value) {
                        if($value==$email){
                            $state = false;
                            echo "This email is already registered";
                            break;
                        }else{
                            $state = true;
                        }
                    }
                }
            }

            if($state){
                if(empty($uName) || empty($email) || empty($password) || empty($cPassword)){
                    echo "Fields are empty";
            }else{
                signupInsert($connect,$uName,$email,$password);
            }
        }
      }
    }
}


function login($connect){
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT password,email,username,user_category FROM users";

        $arr = GetData($connect,$sql);

        $status = false;

        foreach ($arr as $value) {
            $getEmail = $value['email'];
            $getPw = $value['password'];
            $getUname = $value['username'];
            $getCategory = $value['user_category'];

            if ($email==$getEmail && $password==$getPw) {
                $state = true;
                session_start();
                $_SESSION['email']=$getEmail;
                $_SESSION['username']=$getUname;
                $_SESSION['loginStatus']=true;
                $_SESSION['category']=$getCategory;
                header('Location: index.php');
                break;
            }else{
                $state = false;
            }
        }

        if(!$state){
            $_SESSION['loginStatus']=false;
            echo "wrong pw or email";
        }

    }
}




?>
