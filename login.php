<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sign in </title>
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
                                    <h2 class="text-center mb-3">Restaurent Login</h2>
                                    <h4 class="text-center mb-4">Login in your account</h4>

                                    <form action="login_post.php" method="POST">
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input name="email" type="text" class="form-control">
                                            <?php if (isset($_SESSION['error'])) { ?>
                                                <strong class="text-danger"><?= $_SESSION['error'] ?></strong>
                                            <?php }
                                            unset($_SESSION['error']) ?>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input name="password" type="password" class="form-control">
                                            <?php if (isset($_SESSION['Passerror'])) { ?>
                                                <strong class="text-danger"><?= $_SESSION['Passerror'] ?></strong>
                                            <?php }
                                            unset($_SESSION['Passerror']) ?>
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="signup.php">Sign up</a></p>
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
    <script src="Dashboard_files/js/custom.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php if (isset($_SESSION['confirmation'])) { ?>
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '<?= $_SESSION['confirmation'] ?>',
                showConfirmButton: false,
                timer: 1800
            })
        </script>
    <?php }
    unset($_SESSION['confirmation']);
    unset($_SESSION['login_value']);
    ?>

</body>

</html>