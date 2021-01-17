<!DOCTYPE html>
<html>
    <head>
        <script src="../JS/loginvalidate.js"></script>
        <script src="../JS/logintemp.js"></script>
        <link rel="Stylesheet" href="../CSS/login.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="login-page">
            <div class="form">
              <form class="register-form" id="regForm" name="RegForm" action="signuper.php" onsubmit="return Validatee()" method="post">
                <input type="text" placeholder="Name" name="name"/> 
                <input type="email" placeholder="email address" name="email"/>
                <input type="text" placeholder="username" name="uname"/>
                <input type="password" placeholder="password" name="pass"/>
                <input type="password" placeholder="re-enter password" name="pass0"/>
                <button type="submit">create</button>
                <p class="message">Already registered? <a onclick="onSignIn()">Sign In</a></p>
              </form>
              <form class="login-form" id="loginForm" name="LogForm" action="loginval.php" onsubmit="return Validate()" method="post">
                <input type="text" placeholder="username" name="uname"/>
                <input type="password" placeholder="password" name="pass"/>
                <button type="submit" name="login">login</button>
                <p class="message">Not registered? <a onclick="onAccountCreate()">Create an account</a></p>
              </form>
              <center>
              <?php
                    if($_GET['Invalid']==true)
                    {
                ?>
                        <br>
                        <h5 style="color:red"><?php echo $_GET['Invalid']; ?> </h5>
                <?php
                    }
              ?>
              <?php
                    if($_GET['Sucess']==true)
                    {
                ?>
                        <br>
                        <h5 style="color:green"><?php echo $_GET['Sucess']; ?> </h5>
                <?php
                    }
              ?>
              </center>
            </div>
          </div>
    </body>
</html>