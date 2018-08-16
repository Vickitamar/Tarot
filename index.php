<?php 
require('core/init.php');
?>

<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Tarot</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <link rel="stylesheet" type="text/css" href="assets/css/login.css">  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
           <script src="assets/js/script.js"></script>  
      </head>  
      <body>
        <?php
        if(isset($_POST['registerButton'])) {
          echo '<script>
                  $(document).ready(function() {
                    $("#loginForm").hide();
                    $("#registerForm").show();
                  });
                </script>';
        } else {
          echo '<script>
                  $(document).ready(function() {
                    $("#loginForm").show();
                    $("#registerForm").hide();
                  });
                </script>';
        }
        ?>
        <div class="wrapper">  
           <br />  
           <div class="container" style="width:500px;">  
                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  
                <h3 align="">Please log in to see your future</h3><br />  
                <form id="loginForm" method="post">  
                     <label>Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" class="btn btn-info" value="Login" />
                     <div class="hasAccountText">
                        <span id="hideLogin">Don't have an account yet? <strong>Sign up here.</strong></span>

                    </div>  
                </form>

                <form id="registerForm" action ="index.php" method="POST">
                    <h2>Create your free account</h2>
                    <p><?php echo $register->getError(Constants::$userNameCharacters); ?></p>
                    <label for="username">Username</label>
                    <input id="username" type="text" name="username" placeholder="choose a username" class="form-control" required>
                    <br />
                    <p><?php echo $register->getError(Constants::$passwordsDoNotMatch); ?>
                    <?php echo $register->getError(Constants::$passwordNotAlphaNumeric); ?>
                    <?php echo $register->getError(Constants::$passwordCharacters); ?></p> 
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" class="form-control" required>
                    <br /> 
                    <label for="password2">Confirm Password</label>
                    <input id="password2" type="password" name="password2" class="form-control" required>
                    <br /> 
                    <input type="submit" name="registerButton" class="btn btn-info" value="SIGN UP"></input>
                    <div class="hasAccountText">
                        <span id="hideRegister">Alreday have an account? <strong>Log in here.</strong></span>
                    </div> 
                </form> 
           </div>  
           <br />
        </div>    
      </body>  
 </html>  
