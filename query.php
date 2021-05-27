<?php
$Server = "localhost";
$Username = "root";
$password = "";
$db ="test";
$con = mysqli_connect($Server , $Username , $password ,$db);
if($con === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['save'])){
    if(!empty($_POST['user_email']) && !empty($_POST['name']) && !empty($_POST['phone']) ){
        $user_email =$_POST['user_email'];
        $name =$_POST['phone'];
        $phone = $_POST['name'];

        $sql = "INSERT INTO `user` (`user_email`, `phone`, `name`) VALUES ('$user_email', '$name', '$phone');";
        $run = mysqli_query($con ,$sql) or die(mysqli_error());
        if ($run)
        {
            echo '<script>alert("Data Submitted Successfully")</script>';
            header("Location:index.php");
                    exit();
        } 
    }
}
    
        
?>