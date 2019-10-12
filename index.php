<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to my Login App</title>
        <link href="style/bootstrap.css"  rel="stylesheet" type="text/css"/>
        <link href="style/main.css"  rel="stylesheet" type="text/css"/>
    </head>

   

    <body>
        <div class="container">
            <div class="col col-md-8 offset-2">
                
            
            <div class="myBody">
                <?php
                if(isset($_GET['error'])){
                    echo ' <p class="alert alert-danger">'. $_GET["error"]. '</p>';

                }
                ?>
           
            <form method="POST" action="login.php"> 

            <div class="form-group">
                <label>Userame:</label>
                <input name="username" type="text" class="form-control" required/>
            </div>

            <div class="form-group">
                <label>Password:</label>
                    <input name="password" type="password" class="form-control" required/>
            </div>

            <div class="form-group">
            <input type="submit" name="loginApp" class="btn btn-success form-control" value="Log In">
        </div>
            </form>
        </div>
    </div>
</div>
    </body>
</html>


