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

<body id="page-top">

    <div id="wrapper">

        <?php require_once $DOCUMENT_ROOT . 'components/sidebar.php' ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <?php require_once $DOCUMENT_ROOT . 'components/navbar.php' ?>

                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Pengaturan</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-user"></i>&ensp;Profil</a>
                        <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-key"></i>&ensp;Password</a>
                    </div>

                </div>
            </div>

            <?php require_once $DOCUMENT_ROOT . 'components/footer.php' ?>

        </div>

    </div>

    <?php require_once $DOCUMENT_ROOT . 'components/btn-page-top.php' ?>
    <?php require_once $DOCUMENT_ROOT . 'components/log-out-modal.php' ?>



    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-auth.js"></script>
    <script src="<?= $BASE_URL ?>js/db-api.js"></script>
    <script src="<?= $BASE_URL ?>js/auth.js"></script>
    <script src="<?= $BASE_URL ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= $BASE_URL ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $BASE_URL ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= $BASE_URL ?>js/script.js"></script>
    <script src="<?= $BASE_URL ?>js/pengaturan.js"></script>

</body>

</html>