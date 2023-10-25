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
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <div class="row justify-content-center">

            <div class="col-xl-3 col-md-6 mb-3">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <h4 class="small font-weight-bold text-warning text-uppercase">Lama Penyinaran Matahari</h4>
                      <h1 class="display-3 mt-4 text-center text-warning"><i class="fas fa-sun"></i></h1>
                      <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">1 jam 24 menit</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-3">
              <div class="card border-left-info shadow py-2 h-100">
                <div class="card-body">
                  <div class="col mr-2">
                    <h4 class="small font-weight-bold text-info text-uppercase">Cuaca</h4>
                    <!-- <h1 class="display-1 text-center text-info"><i class="fas fa-sun"></i></h1> -->
                    <!-- <h1 class="display-1 text-center text-info"><i class="fas fa-cloud-sun"></i></h1> -->
                    <!-- <h1 class="display-1 text-center text-info"><i class="fas fa-cloud"></i></h1> -->
                    <h1 class="display-3 mt-4 text-center text-info" id="icon-cuaca"></h1>
                    <div class="h5 mb-0 font-weight-bold text-gray-800 text-uppercase text-center" id="text-cuaca"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-12 mb-3">
              <div class="card border-left-primary shadow py-2 h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <h4 class="small font-weight-bold text-primary text-uppercase">Kelembaban Udara <span class="float-right" id="text-kelembaban-udara"></span></h4>
                      <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" id="bar-kelembaban-udara" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h4 class="small font-weight-bold text-primary text-uppercase mt-5">Kelembaban Tanah <span class="float-right" id="text-kelembaban-tanah"></span></h4>
                      <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" id="bar-kelembaban-tanah" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>


                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <h4 class="small font-weight-bold text-primary text-uppercase">Suhu</h4>
                      <div class="h4 mb-0 font-weight-bold text-gray-800 text-center"><i class="fas fa-temperature-high text-primary"></i>&ensp;<span id="text-suhu"></span></div>


                    </div>
                    <div class="col-auto">
                      <i class="fas fa-seedling fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">pH Tanah</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div id="text-ph-tanah" class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div id="bar-ph-tanah" class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-syringe fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <div class="col-xl-4 col-md-12 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Intensitas Cahaya</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id="text-intensitas-cahaya"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-ruler-vertical fa-2x text-gray-300"></i>
                    </div>
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
  <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-database.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-auth.js"></script>
  <script src="<?= $BASE_URL ?>js/db-api.js"></script>
  <script src="<?= $BASE_URL ?>js/auth.js"></script>
  <script src="<?= $BASE_URL ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= $BASE_URL ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= $BASE_URL ?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= $BASE_URL ?>js/script.js"></script>
  <script src="<?= $BASE_URL ?>vendor/chart.js/Chart.min.js"></script>
  <script src="<?= $BASE_URL ?>js/chart.js"></script>

  <script src="<?= $BASE_URL ?>js/data-realtime.js"></script>

</body>

</html>