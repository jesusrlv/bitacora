<?php
session_start();

$usr = $_SESSION['usr'];
if (isset($usr)){

}
else{
  header('Location: login.html');
  die();
}

date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_MX.UTF-8');
$fecha_sistema = strftime("%Y-%m-%d");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <link rel="icon" type="image/png" href="img/inclusion.ico"/>
    <title>Admin bitácora | INCLUSIÓN</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b2e301b71f.js" crossorigin="anonymous"></script>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="script.js"></script>
    <script src="js/search.js"></script>
    <!-- <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->


    <style>
      @import url('https://fonts.googleapis.com/css2?family=Aboreto&family=Montserrat:ital,wght@0,400;0,500;0,700;0,900;1,400&display=swap');
      body{
        font-family: 'Aboreto', cursive;
        font-family: 'Montserrat', sans-serif;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      #imgFoot{
        filter: grayscale(100%);
        width: 180px;
      }
    </style>
    <?php
      include ('prcd/notiticket.php');
    ?>
    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">
    <header class="p-3 mb-3 border-bottom">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 px-3 mb-lg-0 text-dark text-decoration-none" >
            <img src="img/InclusionLogo.png" class="img-fluid" style="max-width: auto; max-height: 3rem;" alt="">
          </a>
  
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <div class="btn-group" role="group" aria-label="Basic example">

            </div>
          </ul>
  
          <div class="btn-group" role="group" aria-label="Basic example">
            <a href="busqueda.php" target="_self" class="btn btn-light position-relative" type="buton"  aria-expanded="false"><i class="bi bi-clipboard-check"></i>
              <span id="esconder">Tickets</span>
              <span class="position-absolute top-100 start-0 translate-middle badge rounded-pill bg-danger" id="notificacionBadge">
                <?php
                  echo $notificaciones;
                ?>
                <span class="visually-hidden">unread messages</span>
              </span>
            </a>
            <a href="reportes.php" type="button" class="btn btn-light"><i class="bi bi-clipboard-data"></i> Reportes</a>
          </div>
  
          <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="img/avatar.png" alt="Logo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small">
              <li><a class="dropdown-item" href="busqueda.php">Tickets</a></li>
              <li><a class="dropdown-item" href="reportes.php">Reportes</a></li>
              <li><a class="dropdown-item" href="#">Contraseña</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="prcd/sort.php">Cerrar Sesión</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="img/logo_completo.png" alt="" width="300" height="">
      <h2>Departamento de Tecnologías de la Información</h2>
      <p class="lead">Listado de tickets</p>
    </div>

    <div class="row g-5 border rounded-2 bg-white p-2">
      <div class="col-md-12 col-lg-12">
        <!-- <form action="prcd/save.php" method="post"> -->
        <form id="pwdForm">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label"><i class="bi bi-calendar-week-fill"></i> Fecha inicial</label>
              <input type="date" class="form-control" id="fechainicial" name="fechainicial"  onchange="desbloquearfinal()" required>
              <div class="invalid-feedback">
                * Campo requerido.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="firstName" class="form-label"><i class="bi bi-calendar-week-fill"></i> Fecha final</label>
              <input type="date" class="form-control" id="fechafinal" name="fechafinal"  onchange="checkglobal()" disabled>
              <div class="invalid-feedback">
                * Campo requerido.
              </div>
            </div>  
            <div class="col-sm-4">
            </div>
            <div class="col-sm-5">
            </div>
            <div class="col-sm-2">
                <div class="dropdown text-end">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-clipboard-data"></i>
                    Generar Reporte
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="periodo.php">Tickets del periodo</a></li>
                    <li><a class="dropdown-item" href="#">Detallado</a></li>
                </ul>
                </div>
            </div>

            <div class="container mt-5">
            <div class="row mb-3">
                    <!-- Widget Type 1-->
                    <div class="mb-4 col-sm-6 col-lg-4 mb-4">
                        <div class="card h-100" style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);">
                        <div class="card-body" >
                            <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h4 class="fw-normal" style="color: #002b8f"><span id=hardware></span>32</h4>
                                <p class="subtitle text-sm text-muted mb-0">Tickets</p>
                            </div>
                              <div class="flex-shrink-0 ms-3">
                                  <svg class="svg-icon text-red">
                                  <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#speed-1"> </use>
                                  </svg>
                              </div>
                            </div>
                        </div>
                        <div class="card-footer py-3 bg-red-light" style="background-color: #cfe2ff;">
                            <div class="row align-items-center">
                            <div class="col-10">
                                <p class="mb-0" style="color: #002b8f">Hardware</p>
                            </div>
                            <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
                              </div>
                              </div>
                        </div>
                        </div>
                    </div>
                    <!-- /Widget Type 1-->
                    <!-- Widget Type 1-->
                    <div class="mb-4 col-sm-6 col-lg-4 mb-4">
                        <div class="card h-100" style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);">
                        <div class="card-body" >
                            <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h4 class="fw-normal text-blue" style="color: #5a4b7d"><span id=software>15</span></h4>
                                <p class="subtitle text-sm text-muted mb-0">Tickets</p>
                            </div>
                            <div class="flex-shrink-0 ms-3">
                                    <svg class="svg-icon text-blue">
                                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#news-1"> </use>
                                    </svg>
                            </div>
                            </div>
                        </div>
                        <div class="card-footer py-3 bg-blue-light" style="background-color: #dadcf8;">
                            <div class="row align-items-center text-blue">
                            <div class="col-10">
                                <p class="mb-0" style="color: #5a4b7d">Software</p>
                            </div>
                            <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- /Widget Type 1-->
                    <!-- Widget Type 1-->
                    <div class="mb-4 col-sm-6 col-lg-4 mb-4">
                        <div class="card h-100" style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);">
                          <div class="card-body">
                              <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="fw-normal" style="color: #855a8a"><span id=otros>23</span></h4>
                                    <p class="subtitle text-sm text-muted mb-0">Tickets</p>
                                </div>
                                <div class="flex-shrink-0 ms-3">
                                        <svg class="svg-icon text-primary">
                                        <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#bookmark-1"> </use>
                                        </svg>
                                </div>
                              </div>
                          </div>
                          <div class="card-footer py-3 bg-primary-light" style="background-color: #f5daf8;">
                            <div class="row align-items-center text-primary">
                              <div class="col-10" >
                                  <p class="mb-0" style="color: #855a8a">Otros</p>
                              </div>
                              <div class="col-2 text-end"><i class="fas fa-caret-up"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!-- /Widget Type 1-->
                    <div class="mb-4 col-sm-6 col-lg-8 mb-4 mt-4">
                    </div>
                    <div class="mb-4 col-sm-6 col-lg-4 mb-4 mt-4 text-end">
                      <button type="button" class="btn btn-secondary" style="background-color:mediumpurple; box-shadow:dimgrey" onclick="window.print()">
                        <i class="bi bi-printer"></i> Imprimir
                      </button>
                      <button type="button" class="btn btn-secondary" style="background-color:#5a4b7d">
                        <i class="bi bi-download"></i> Exportar
                      </button>
                    </div>
                </div>
            </div>

      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
  <img  class="d-block mx-auto mb-4" src="img/logo_completo.png" alt="" id="imgFoot">
    <p class="mb-1">&copy; 2023 INCLUSIÓN</p>
  </footer>
</div>

      <script src="form-validation.js"></script>
  </body>
</html>

<script>
  $(document).ready(function () {
        $("#filtroTable").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#searchDate1 tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
<script>
  function checkglobal(){
  /*   document.getElementById('fechafinal').innerHTML = ""; */
    var fecha_ini = document.getElementById('fechainicial').value;
    var fecha_fin = document.getElementById('fechafinal').value;

    $.ajax ({
      url: 'prcd/ticketsglobal.php',
      type: "POST",
      dataType: 'json',
      data: {
        fecha_ini:fecha_ini,
        fecha_fin:fecha_fin
      },
      success: function(response){
        /* $("#searchDate1").html(response); */
        var jsonData = JSON.parse(JSON.stringify(response));
        var hardware = jsonData.hardware;
        var software = jsonData.softdware;
        var otros = jsonData.otros;

        console.log(jsonData.hardware);

        document.getElementById('hardware').value = hardware;
        document.getElementById('software').value = software;
        document.getElementById('otros').value = otros;
        console.log(hardware);

      }
    })
  }

</script>