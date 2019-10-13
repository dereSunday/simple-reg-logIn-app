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
                      <!--firstname -->
                      <div class="form-group">
                <label>FirstName:</label>
                <input name="firstname" type="text" class="form-control" required/>
            </div>
                      <!--lastname -->
                      <div class="form-group">
                <label>LastName:</label>
                <input name="lastname" type="text" class="form-control" required/>
            </div>
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
            <input type="submit" name="regApp" class="btn btn-success form-control" value="Sign Up">
        </div>
        <p> Are a member? <a href="index.php"> Login  </a> Now</p>
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


