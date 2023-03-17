<?php
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
              <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
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
            
<!--             <div class="col-sm-6">
              <label for="firstName" class="form-label"><i class="bi bi-funnel"></i> Filtro</label>
              <input type="text" class="form-control" id="filtroTable" name="filtroTable" placeholder="Filtro...">
            </div> -->
            <div class="col-sm-6">
              <label for="firstName" class="form-label"><i class="bi bi-calendar-week-fill"></i> Fecha final</label>
              <input type="date" class="form-control" id="fechafinal" name="fechafinal"  onchange="searchDate2()" disabled>
              <div class="invalid-feedback">
                * Campo requerido.
              </div>
            </div>  
            <div class="col-sm-4">
              <input class="form-control" list="datalistOptions" id="filtroTable" placeholder="Ingresa Folio o Nombre...">
              <datalist id="datalistOptions">
                <option value="San Francisco">
                <option value="New York">
                <option value="Seattle">
                <option value="Los Angeles">
                <option value="Chicago">
              </datalist>
            </div>
            <div class="col-sm-5">
              <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                <label class="btn btn-outline-success" for="btncheck1"><small>Solucionado</small></label>

                <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                <label class="btn btn-outline-warning" for="btncheck2"><small>En proceso</small></label>

                <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                <label class="btn btn-outline-danger" onclick="checksnosolucionados()" for="btncheck3"><small>No Solucionado</small></label>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="dropdown text-end">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-clipboard-data"></i>
                  Generar Reporte
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Tickets del periodo</a></li>
                  <li><a class="dropdown-item" href="#">Detallado</a></li>
                  <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                </ul>
              </div>
            </div>
            <!-- table -->
            <div class="container mt-5">
                <table class="table align-middle table-borderless rounded">
                    <thead class="bg-dark text-light text-center">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Folio</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Datos</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Estatus</th>
                        <th scope="col">Reporte</th>
                        </tr>
                    </thead>
                    <tbody id="searchDate1">
                    </tbody>
                </table>
            </div>
            <!-- table -->
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
  function checksnosolucionados(){
    document.getElementById('searchDate1').innerHTML = "";
    var fecha_ini = document.getElementById('fechainicial').value;
    var fecha_fin = document.getElementById('fechafinal').value;

    $.ajax ({
      url: 'prcd/checksnosolucionados.php',
      type: "POST",
      dataType: 'html',
      data: {
        fecha_ini:fecha_ini,
        fecha_fin:fecha_fin
      },
      success: function(response){
        $("#searchDate1").html(response);
      }
    })
  }

</script>