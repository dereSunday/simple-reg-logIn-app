<?php
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$dbName = 'gipi';
$con = mysqli_connect($host,$user,$pass,$dbName);

if(isset($_POST['loginApp'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $select = "SELECT * FROM users where username='$username' AND password = '$password'";
    $query = mysqli_query($con,$select);
    $count = mysqli_num_rows($query);

    if($count == 1){
         $_SESSION['id']=$username ;
        echo "<script>window.open('main.php','_self') </script>";
    }
   

    //
}

?>