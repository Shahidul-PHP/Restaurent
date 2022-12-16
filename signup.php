<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Create a new Account </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="Dashboard_files/images/favicon.png">
    <link href="Dashboard_files/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h2 class="mb-3 text-center">Restaurent - Create Account</h2>
                                    <h4 class="text-center mb-4">Sign up in your account</h4>
                                    <form action="signup_post.php" method="POST">
                                        <div class="form-group mb-3">
                                            <label><strong>Username</strong></label>
                                            <input name="name" type="text" class="form-control"  value="<?= isset($_SESSION['name_value_error']) ? $_SESSION['name_value_error'] : '' ?>">

                                            <?php if (isset($_SESSION['nameError'])) { ?>
                                                <strong class=" text-danger"><?= $_SESSION['nameError'] ?></strong>
                                            <?php }
                                            unset($_SESSION['nameError']) ?>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label><strong>Email</strong></label>
                                            <input name="email" type="email" class="form-control"  value="<?= isset($_SESSION['mail_value_error']) ? $_SESSION['mail_value_error'] : '' ?>">

                                            <?php if (isset($_SESSION['mailError'])) { ?>
                                                <strong class="text-danger"><?= $_SESSION['mailError'] ?></strong>
                                            <?php }
                                            unset($_SESSION['mailError']) ?>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input name="password" type="password" class="form-control">
                                            <?php if (isset($_SESSION['passError'])) { ?>
                                                <strong class="text-danger"><?= $_SESSION['passError'] ?></strong>
                                            <?php }
                                            unset($_SESSION['passError']) ?>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="login.php">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="Dashboard_files/vendor/global/global.min.js"></script>
    <script src="Dashboard_files/js/quixnav-init.js"></script>

</body>

</html>

<?php
unset($_SESSION['name_value_error']);
unset($_SESSION['mail_value_error']);
?>