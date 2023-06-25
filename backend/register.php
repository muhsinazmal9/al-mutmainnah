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
                            <p class="lead">Create an account</p>
                        </div>
                        <div class="body">
                            <form class="form-auth-small" action="register_post.php" method="post">

                                <div class="form-group">
                                    <label for="signup-name" class="control-label">Name</label>
                                    <input type="text" class="form-control" id="signup-name" placeholder="John Doe"
                                        name="name" value="<?php
                                        if (isset($_SESSION['old_name'])) {
                                            echo $_SESSION['old_name'];
                                        } ?>">
                                </div>

                                <!-- name validation -->
                                <?php if (isset($_SESSION['name-error'])): ?>
                                    <div class="alert alert-danger">
                                        <?= $_SESSION['name-error'] ?>
                                    </div>
                                <?php endif; ?>

                                <div class="form-group">
                                    <label for="signup-email" class="control-label">Email</label>
                                    <input type="email" class="form-control" id="signup-email"
                                        placeholder="example@mail.com" name="email" value="<?php
                                        if (isset($_SESSION['old_email'])) {
                                            echo $_SESSION['old_email'];
                                        } ?>">
                                </div>

                                <!-- email validation -->
                                <?php if (isset($_SESSION['email-error'])): ?>
                                    <div class="alert alert-danger">
                                        <?= $_SESSION['email-error'] ?>
                                    </div>
                                <?php endif; ?>

                                <!-- email duplicate checker -->
                                <?php if (isset($_SESSION['dup_email_error'])): ?>
                                    <div class="alert alert-danger">
                                        <?= $_SESSION['dup_email_error'] ?>
                                    </div>
                                <?php endif; ?>

                                <div class="form-group">
                                    <label for="signup-password" class="control-label">Password</label>
                                    <input type="password" class="form-control" id="signup-password"
                                        placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"
                                        name="pass" value="<?php
                                        if (isset($_SESSION['old_pass'])) {
                                            echo $_SESSION['old_pass'];
                                        } ?>">
                                </div>

                                <!-- password validation -->
                                <?php if (isset($_SESSION['password-error'])): ?>
                                    <div class="alert alert-danger">
                                        <?= $_SESSION['password-error'] ?>
                                    </div>
                                <?php endif; ?>

                                <div class="form-group">
                                    <label for="signup-confirm-password" class="control-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="signup-confirm-password"
                                        placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"
                                        name="confirm_pass" value="<?php
                                        if (isset($_SESSION['old_confirm_pass'])) {
                                            echo $_SESSION['old_confirm_pass'];
                                        } ?>">
                                </div>

                                <!-- confirm password validation -->
                                <?php if (isset($_SESSION['confirm_password-error'])): ?>
                                    <div class="alert alert-danger mt-4">
                                        <?= $_SESSION['confirm_password-error'] ?>
                                    </div>
                                <?php endif; ?>

                                <!-- password match validation -->
                                <?php if (isset($_SESSION['password_match_error'])): ?>
                                    <div class="alert alert-danger mt-4">
                                        <?= $_SESSION['password_match_error'] ?>
                                    </div>
                                <?php endif; ?>

                                <!-- preg-match validation -->
                                <?php if (isset($_SESSION['preg_ma_error'])): ?>
                                    <div class="alert alert-danger mt-4">
                                        <?= $_SESSION['preg_ma_error'] ?>
                                    </div>
                                <?php endif; ?>

                                <button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>

                                <div class="bottom">
                                    <span class="helper-text">Already have an account? <a
                                            href="login.php">Login</a></span>
                                </div>
                            </form>
                            <!-- <div class="separator-linethrough"><span>OR</span></div>
                            <button class="btn btn-signin-social"><i class="fa fa-facebook-official facebook-color"></i>
                                Sign in with Facebook</button>
                            <button class="btn btn-signin-social"><i class="fa fa-twitter twitter-color"></i> Sign in
                                with Twitter</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>

</html>

<?php session_unset(); ?>