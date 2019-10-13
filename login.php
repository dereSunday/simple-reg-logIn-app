<?php
session_start();
$host = 'localhost';//desame for local and producton level
$user = 'root'; //username:locally host is always root::but production level, the name will be different
$pass = ''; //password
$dbName = 'demoProject'; //change this to your database name
$tableName = 'users';
$con = mysqli_connect($host,$user,$pass,$dbName);

if(isset($_POST['loginApp'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $select = "SELECT * FROM $tableName where un='$username' AND pw = '$password'";
    
    $query = mysqli_query($con,$select);
    $count = mysqli_num_rows($query);

    if($count == 1){
         $_SESSION['id']=$username ;
        echo "<script>window.open('main.php','_self') </script>";
    }else{
        echo "<script>window.open('index.php?error=Invalid username or password','_self')</script>";
    }
   

    //
}
if(isset($_POST['regApp'])){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $insert = "INSERT INTO users (fn,ln,un,pw) VALUES('$fname','$lname','$username','$password')";
    $query = mysqli_query($con,$insert);
    if($query){
        echo "<script>window.open('index.php?success=Your Details was Insert Successfully','_self') </script>";

    }else{
        echo "<script>window.open('reg.php?error=Error in inserting your Record Please try again=','_self') </script>";
    }
}

?>