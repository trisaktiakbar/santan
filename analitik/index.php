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
                        <h1 class="h3 mb-0 text-gray-800">Analitik</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Ketinggian Media Tanam</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">100 mdpl</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-ruler-vertical fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Cuaca</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Cerah</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-sun fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xl-4">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Suhu</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="chartSuhu"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Kelembaban Udara</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="chartKelembabanUdara"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tekanan Udara</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="chartTekananUdara"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">pH Tanah</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="chartPHTanah"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Kelembaban Tanah</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="chartKelembabanTanah"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Curah Hujan</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="chartCurahHujan"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Penyinaran Matahari</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="chartPenyinaranMatahari"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>


                </div>
            </div>

            <?php require_once $DOCUMENT_ROOT . 'components/footer.php' ?>

        </div>

    </div>

    <?php require_once $DOCUMENT_ROOT . 'components/btn-page-top.php' ?>
    <?php require_once $DOCUMENT_ROOT . 'components/log-out-modal.php' ?>

    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-database.js"></script>
    <script src="<?= $BASE_URL ?>js/db-api.js"></script>
    <script src="<?= $BASE_URL ?>js/auth.js"></script>
    <script src="<?= $BASE_URL ?>js/datetime.js"></script>
    <script src="<?= $BASE_URL ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= $BASE_URL ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $BASE_URL ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= $BASE_URL ?>js/script.js"></script>
    <script src="<?= $BASE_URL ?>vendor/chart.js/Chart.min.js"></script>
    <script src="<?= $BASE_URL ?>js/chart.js"></script>
    <script src="<?= $BASE_URL ?>js/analitik.js"></script>

</body>

</html>