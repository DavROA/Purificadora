<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Purificadora</title>
    <!-- css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="assets/vendors/jquery-bar-rating/css-stars.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/select2/select2.min.css" />
    <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css" />

    <link rel="stylesheet" href="assets/css/demo_2/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/gota.png" />
  </head>
  <body>
    <div class="container-scroller">

      <div class="horizontal-menu">
        <!-- Navbar de logo (color blanco) -->
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
          <div class="container">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo" href="home.php">
                <img src="assets/images/logo.svg" alt="logo" />
                <span class="font-12 d-block font-weight-light">Mensaje del logo</span>
              </a>
              <a class="navbar-brand brand-logo-mini" href="home.php">
                <img src="assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div
              class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="nav-profile-img">
                      <img src="assets/images/faces/face1.jpg" alt="image" />
                    </div>
                    <div class="nav-profile-text">
                      <p class="text-black font-weight-semibold m-0"> Nayeli Díaz </p>
                      <span class="font-13 online-color">online <i class="mdi mdi-chevron-down"></i></span>
                    </div>
                  </a>
                  <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="#"><i class="mdi mdi-cached me-2 text-success"></i>Configuración </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-logout me-2 text-primary"></i> Salir </a>
                  </div>
                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle"><span class="mdi mdi-menu"></span>
              </button>
            </div>
          </div>
        </nav>

        <!-- Navbar de opciones (color azul) -->
        <nav class="bottom-navbar">
          <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="home.php">
                  <i class="mdi mdi-home-circle menu-icon"></i>
                  <span class="menu-title">Home</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="home.php">
                  <i class="mdi mdi-clipboard-text menu-icon"></i>
                  <span class="menu-title">Venta</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reparto.php">
                  <i class="mdi mdi-contacts menu-icon"></i>
                  <span class="menu-title">Reparto</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registro.php">
                  <i class="mdi mdi-chart-bar menu-icon"></i>
                  <span class="menu-title">Registro</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gastos.php">
                  <i class="mdi mdi-table-large menu-icon"></i>
                  <span class="menu-title">Gastos</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reportes.php">
                  <i class="mdi mdi-table-large menu-icon"></i>
                  <span class="menu-title">Reportes</span>
                </a>
              </li>

            </ul>
          </div>
        </nav>
      </div>

      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper pb-0">
          <div class="page-header">
              <h3 class="page-title">Gastos</h3>
            </div>
            <div class="row">
              <div class="col-sm-12 stretch-card grid-margin">
                <div class="card">
                <form >
                  <div class="row">
                      <div class="col-md-3">
                        <div class="card border-0">
                          <div class="card-body">
                          <div class="form-group row">
                              <label>Tipo de gasto</label>
                                <select class="form-control form-control-sm" style="width: 100%;">
                                  <option value="">Pipa de Agua</option>
                                  <option value="">Gasolina</option>
                                  <option value="">Piso</option>
                                  <option value="">Digar</option>
                                  <option value="">Otros</option>
                        
                                </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card border-0">
                          <div class="card-body">
                          <div class="form-group">
                          <label for="exampleInputUsername1">Descripción</label>
                          <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" placeholder="Descripción" />
                        </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card border-0">
                          <div class="card-body">
                            <div class="form-group">
                            <label for="exampleInputUsername1">Monto del gasto</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text bg-primary text-white">$</span>
                                </div>
                                <input type="text" class="form-control form-control-sm" aria-label="Amount (to the nearest dollar)" />
                                <div class="input-group-append">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card border-0">
                          <div class="card-body">
                          <div class="form-group row">
                              <label>Encargado</label>
                                <select class="form-control form-control-sm" style="width: 100%;">
                                  <option value="">Edgardo Juárez</option>
                                  <option value="">otros</option>
                        
                                </select>
                            </div>                      
                            <button type="button" class="btn btn-primary btn-fw"> Guardar </button>
                          </div>
                        </div>
                      </div>
                  </div>
                  
                  </form> 
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Gastos del día</h4>
                      </p>

                      <div class="page-header flex-wrap">
                        <div class="header-left">
                          
                        </div>
                        
                      </div>
                      
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Tipo de Gasto</th>
                              <th>Descripción</th>
                              <th>Costo del gasto</th>
                              <th>Encargado</th>
                              <th>Fecha y hora</th>

                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>G01</td>
                              <td>Pipa de agua</td>
                              <td class="text-success"> Compra de pipa de agua de 10 mil litros.</td>
                              <td>$1000</td>
                              <td>Edgardo Juárez Vásquez</td>
                              <td class="text-success"> 11:11:00 hrs, 13-enero-2024 </td>
                            </tr>
                            <tr>
                              <td>G02</td>
                              <td>Otros</td>
                              <td class="text-success"> Compostura de camioneta.</td>
                              <td>$1000</td>
                              <td>Edgardo Juárez Vásquez</td>
                              <td class="text-success"> 11:11:00 hrs, 13-enero-2024 </td>
                            </tr>                          
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>

          <footer class="footer">
            <div class="container">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">

              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>

    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/select2/select2.min.js"></script>

    <script src="assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/flot/jquery.flot.js"></script>
    <script src="assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>

    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <script src="assets/js/select2.js"></script>

    <script src="assets/js/dashboard.js"></script>

  </body>
</html>