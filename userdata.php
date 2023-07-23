
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $location=$_POST['location'];
    $number=$_POST['phno'];
    $message=$_POST['message'];
    if(!empty($name) && !empty($email) && !empty($location) && !empty($message)){
        $conn=mysqli_connect('localhost','root','','portfolio');
        session_start(); 
        if($conn==false){
            die(mysqli_connect_error());
        }
        $sql="insert into userinfo(Name,EmailId,Location,PhoneNumber,Message)values('$name','$email','$location','$number','$message')";
        if(mysqli_query($conn,$sql)){
            $_SESSION['userName']=$name;
            header('Location:thankyou.php');
    
        }else{
            echo 'Connection error';
        }
            }
            else{
            echo 'Please Provide all information in the form';
            }
    
}

?>