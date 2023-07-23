<?php
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $number = $_POST['phonenumber'];
    $mail = $_POST['email'];
    $message = $_POST['message'];
    if (!empty($name) && !empty($number) && !empty($mail) && !empty($message) ){
        $conn = mysqli_connect('localhost','root','','sample');
        if ($conn==false){
            die(mysqli_connect_error());
        }
        $sql = "INSERT INTO userinfo (name, phonenumber, mailId, message) VALUES('$name','$number','$mail','$message')";
        if (mysqli_query($conn,$sql)){
            echo "sucess";
        }
        else{
            echo 'Something went wrong';
        }
    }else{
         echo "please provide all information";
    }
}
?>

























