<?php 

//print_r($_SESSION['error']);?>



<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <meta name="description" content="" />

        <meta name="author" content="" />

        <title>Login</title>

        <link href="assets/css/styles.css" rel="stylesheet" />

        <link href="assets/css/second.css" rel="stylesheet"/>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    </head>

    <body class="bg-primary"><!------bg-primary--->

        <div id="layoutAuthentication">

            <div id="layoutAuthentication_content">

                <main>

                    <div class="container">

                        <div class="row justify-content-center">

                            <div class="col-lg-5">

                                <div class="card shadow-lg border-0 rounded-lg mt-5">

                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>

                                    <div class="card-body">

                                        <form action="models/log_process.php" method="POST">

                                            <div class="form-floating mb-3">

                                            <input class="form-control" name="unm" id="UserName" type="text" placeholder="username" />

                                            <label for="UserName">UserName</label>

                                                

                                                <?php



                                            if (isset($_SESSION['error']['username'])) {

                                                echo '<p class="error_color">'.$_SESSION['error']['username'].'</p>';

                                            }



                                            ?>

                                            

                                            </div>

                                            <div class="form-floating mb-3">

                                                <input class="form-control" id="inputPassword" name="pwd" type="password" placeholder="Password" />

                                                <label for="inputPassword">Password</label>



                                                <?php



                                            if (isset($_SESSION['error']['password'])) {

                                                echo '<p class="error_color">'.$_SESSION['error']['password'].'</p>';

                                            }



                                            ?>



                                            </div>

                                            <div class="form-check mb-3">

                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />

                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>

                                            </div>

                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                                                <a class="small" href="forget.php">Forgot Password?</a>

                                                <input class="btn btn-primary" type="submit" name="submit" value="Login">

                                            </div>

                                        </form>



                                        <?php unset($_SESSION['error']); ?> 

                                    </div>



                                    <div class="card-footer text-center py-3">

                                        <div class="small">

                                            <a href="register.php">Need an account? Sign up!</a>

                                        </div>

                                            

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </main>

            </div>

            <div id="layoutAuthentication_footer">

            <?php include 'include/footer.php'; ?>

            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

        <script src="assets/js/scripts.js"></script>

    </body>

</html>

