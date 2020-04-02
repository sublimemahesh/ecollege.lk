<!DOCTYPE html>
<?php
include './class/include.php';
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SSM net - Reset Password  </title>

        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">

        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f7a033">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/elephant.min.css">
        <link rel="stylesheet" href="css/login-2.min.css">
        <link href="css/jquery.formValid.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="log-bck">
        <div class="login">
            <div class="login-body">
                <a class="login-brand" href="#">
                    <img class="img-responsive" src="img/logo.png" alt="self english learning">
                </a>
                <div class="login-form">
                    <?php
                    if (isset($_GET['message'])) {

                        $MESSAGE = New Message($_GET['message']);
                        ?>
                        <div class="alert alert-<?php echo $MESSAGE->status; ?>" role = "alert">
                            <?php echo $MESSAGE->description; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <form id="sign_in" method="POST" action="ajax/post-and-get/change-password.php">
                        <div class="form-group">
                            <label for="reset_code">Reset Code </label>
                            <input id="reset_code" class="form-control" type="text" name="code"   > 
                        </div>                        
                        <div class="form-group">
                            <label for="new_password">New Password </label>
                            <input id="new_password" class="form-control" type="password" name="password"   > 
                        </div>                        
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password </label>
                            <input id="confirm_password" class="form-control" type="password" name="confirmpassword"   > 
                        </div>                        

                        <button class="btn btn-primary btn-block" type="submit" name="PasswordReset"  >Send</button>
                    </form>
                </div>
                <div class="login-footer">
                    Login Your Account <a href="login.php">Login </a> 
                </div>
            </div>

        </div>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.formValid.js" type="text/javascript"></script>

    </body>
</html>