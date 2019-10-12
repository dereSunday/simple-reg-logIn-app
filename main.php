<?php
session_start();
if(!isset($_SESSION['id'])){
    echo "<script>window.open('index.html','_self')</script>";
}else{
    $id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to my Login App</title>
        <link href="style/bootstrap.css"  rel="stylesheet" type="text/css"/>
        <link href="style/main.css"  rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="col col-md-8">
                <div class="myBody">
                    <p>Welcome  <b><?= $id;?></b> <a href="logout.php" class="btn btn-danger">Logout </a> </p>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
}
?>