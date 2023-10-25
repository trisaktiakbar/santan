<?php

require_once '../app/const.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $APP_NAME ?></title>
    <link href="<?= $BASE_URL ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="<?= $BASE_URL ?>css/style.css" rel="stylesheet" />

</head>

<body id="page-top" class="bg-size-cover">

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Login Gagal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Oke</button>
                </div>
            </div>
        </div>
    </div>

    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                <div class="container-fluid bg-size-cover" style="height: 100vh; background-image: url('<?= $BASE_URL ?>assets/img/wave.png')">

                    <div class="row align-items-center" style="height: 100vh;">
                        <div class="d-none d-lg-block offset-lg-1 col-lg-5">
                            <img class="w-100" src="<?= $BASE_URL ?>assets/img/bg.svg" alt="">
                        </div>
                        <div class="col-8 offset-2 col-lg-3 offset-lg-1">
                            <div class="text-center">
                                <img src="<?= $BASE_URL ?>assets/img/avatar.svg" class="mb-3" width="100px">
                                <h1 class="h2 mb-4">Log Into<br>Your Account</h1>
                            </div>
                            <form class="user mb-3">
                                <div class="text-center">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="email" placeholder="Enter Email Address..." required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                                    </div>
                                </div>
                                <button id="btn-login" type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                            </form>
                            <?php require_once $DOCUMENT_ROOT . 'components/footer.php' ?>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

    <script src="<?= $BASE_URL ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= $BASE_URL ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $BASE_URL ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-auth.js"></script>
    <script src="<?= $BASE_URL ?>js/db-api.js"></script>
    <script src="<?= $BASE_URL ?>js/script.js"></script>

    <script src="<?= $BASE_URL ?>js/login.js"></script>

</body>

</html>