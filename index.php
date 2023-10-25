<?php require_once 'app/const.php' ?>

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

    <?php require_once 'components/sidebar.php' ?>

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        <?php require_once 'components/navbar.php' ?>

        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <div class="row">
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kelembaban Tanah</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><span id="text-kelembaban-tanah"></span></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" id="bar-kelembaban-tanah" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
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
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><span id="text-ph-tanah"></span></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-success" role="progressbar" id="bar-ph-tanah" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <h4 class="small font-weight-bold text-primary text-uppercase">Kelembaban Udara <span class="float-right" id="text-kelembaban-udara"></span></h4>
                      <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" id="bar-kelembaban-udara" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Suhu</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>

                <div class="card-body pb-5 pt-5">
                  <div class="chart-area">
                    <canvas id="chartSuhu"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-5 mb-4">
              <div class="card shadow">

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Rekomendasi Tanaman</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>

                <div class="card-body">
                  <div class="text-center small">
                    <span class="mr-2"> <i class="fas fa-circle text-primary"></i> Mangga </span>
                    <span class="mr-2"> <i class="fas fa-circle text-info"></i> Jeruk </span>
                    <span class="mr-2"> <i class="fas fa-circle text-success"></i> Apel </span>
                    <span class="mr-2"> <i class="fas fa-circle text-warning"></i> Lainnya </span>
                  </div>
                  <div class="chart-pie pt-4 pb-2 mb-3">
                    <canvas id="chartRekomendasiTanaman"></canvas>
                  </div>
                  <button class="btn btn-primary w-100 mt-4">
                    Refresh
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-4 col-md-5 mb-4">
              <div class="row">


                <div class="col-auto w-100 mb-4">
                  <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <h4 class="small font-weight-bold text-success text-uppercase">Penyinaran Matahari</h4>
                          <h1 class="display-1 text-center font-weight-bold text-success"><i class="fas fa-sun"></i></h1>
                          <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">1 Jam</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-auto w-100 mb-3">
                  <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <h4 class="small font-weight-bold text-info text-uppercase">Cuaca</h4>
                          <!-- <h1 class="display-1 text-center font-weight-bold text-info"><i class="fas fa-sun"></i></h1> -->
                          <!-- <h1 class="display-1 text-center font-weight-bold text-info"><i class="fas fa-cloud-sun"></i></h1> -->
                          <!-- <h1 class="display-1 text-center font-weight-bold text-info"><i class="fas fa-cloud"></i></h1> -->
                          <h1 class="display-1 text-center font-weight-bold text-info"><i class="fas fa-cloud-rain"></i></h1>
                          <div class="h5 mb-0 font-weight-bold text-gray-800 text-uppercase text-center">Hujan</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-xl-8 col-md-7">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Curah Hujan</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>

                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="chartCurahHujan" class="my-5 pb-5"></canvas>
                  </div>
                </div>
              </div>

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Analisis</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem" src="assets/img/undraw_posting_photo.svg" alt="..." />
                  </div>
                  <a href="<?= $BASE_URL ?>analitik" class="btn btn-primary">Tampilkan Analisis</a>

                </div>
              </div>
            </div>

          </div>


        </div>

      </div>

      <?php require_once 'components/footer.php' ?>

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
  <script src="<?= $BASE_URL ?>js/datetime.js"></script>
  <script src="<?= $BASE_URL ?>js/dashboard.js"></script>
  <script src="<?= $BASE_URL ?>js/log-out.js"></script>

</body>

</html>