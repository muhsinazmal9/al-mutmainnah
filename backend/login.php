<?php
session_start();
?>

<!doctype html>
<html lang="en">


<head>
    <title>Al-Mutmainnah</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">

    <link rel="icon" href="favicon.svg" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/vendor/font-awesome/css/font-awesome.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body data-theme="light" class="font-nunito">
    <!-- WRAPPER -->
    <div id="wrapper" class="theme-cyan">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle auth-main hospital">
                <div class="auth-box">
                    <div class="top">
                        <img src="./assets/images/logo-white.svg" alt="Iconic">
                    </div>
                    <div class="card">
                        <div class="header">
                            <p class="lead">Login to your account</p>
                        </div>
                        <div class="body">
                            <form class="form-auth-small" action="login_post.php" method="post">

                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input type="email" class="form-control" id="signin-email" value="<?php
                                    if (isset($_SESSION['old_email'])) {
                                        echo $_SESSION['old_email'];
                                    }
                                    ?>" placeholder="Email" name="email">
                                </div>

                                <?php if (isset($_SESSION['email_missing'])): ?>
                                    <div class="alert alert-danger">
                                        <?= $_SESSION['email_missing']; ?>
                                    </div>
                                <?php endif; ?>



                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" id="signin-password"
                                        placeholder="Password" name="pass">
                                </div>


                                <?php if (isset($_SESSION['pass_missing'])): ?>
                                    <div class="alert alert-danger mt-4">
                                        <?= $_SESSION['pass_missing']; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (isset($_SESSION['check_mail_pass_error'])): ?>
                                    <div class="alert alert-danger mt-4">
                                        <?= $_SESSION['check_mail_pass_error']; ?>
                                    </div>
                                <?php endif; ?>


                                <div class="form-group clearfix">
                                    <label class="fancy-checkbox element-left">
                                        <input type="checkbox">
                                        <span>Remember me</span>
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>

                                <div class="bottom">
                                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="#">Forgot
                                            password?</a></span>
                                    <span>Don't have an account? <a href="register.php">Register</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>


</html>

<?php
session_unset();
?>