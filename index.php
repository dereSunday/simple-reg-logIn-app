<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to my Login App</title>
        <link href="style/bootstrap.css"  rel="stylesheet" type="text/css"/>
        <link href="style/main.css"  rel="stylesheet" type="text/css"/>
    </head>
<!-- Body Section -->
    <body>
        <!--My Container -->
        <div class="container">
            <!--col area -->
            <div class="col col-md-8 offset-2">
                <!--myBody -->
            <div class="myBody">
                <?php
                if(isset($_GET['error'])){
                    echo ' <p class="alert alert-danger">'. $_GET["error"]. '</p>';

                }
                ?>
             <!--form -->
            <form method="POST" action="login.php"> 
            <?php
            if(isset($_GET['success'])){
            echo "<p class='alert alert-success'>".$_GET['success'] ."</p>";
        }
            ?>
                  <!--username -->
            <div class="form-group">
                <label>Userame:</label>
                <input name="username" type="text" class="form-control" required/>
            </div>
              <!--password -->
            <div class="form-group">
                <label>Password:</label>
                    <input name="password" type="password" class="form-control" required/>
            </div>
              <!--submit button -->
            <div class="form-group">
            <input type="submit" name="loginApp" class="btn btn-success form-control" value="Log In">
        </div>
        <p> Are you yet to have an Account? <a href="reg.php"> Create Account </a> Now</p>
            </form>
              <!--form -->
        </div>
          <!--myBody -->
    </div>
    <!--col area -->


    
</div>
<!--End of My Container -->
    </body>
    <!-- End of  Body Section -->
</html>


