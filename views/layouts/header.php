<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--Importar Iconos de Boostrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <!--Importar Css-->
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/style.css" />
  <!--Favicon-->
  <link rel="shortcut icon" href="<?php echo constant('URL') ?>public/img/favicon.ico">
  <title>CRUD</title>
</head>

<body>

  <!-- Barra de navegacion -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
      </button>
      <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="<?php echo constant('URL') ?>">ADMINISTRADOR</a>
  </nav>
  <!------------------------->


  <!-- Barra de Navegacion Lateral -->
  <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
    <div class="offcanvas-body p-0">
      <nav class="navbar-dark">
        <ul class="navbar-nav">
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mt-4 mt-lg-2">
              CORE
            </div>
          </li>
          <li>
            <a href="<?php echo constant('URL') ?>" class="nav-link px-3 active">
              <span class="me-2"><i class="bi bi-speedometer2"></i></span>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
              Interface
            </div>
          </li>
          <li>
            <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
              <span class="me-2"><i class="bi bi-layout-split"></i></span>
              <span>Gestionar</span>
              <span class="ms-auto">
                <span class="right-icon">
                  <i class="bi bi-chevron-down"></i>
                </span>
              </span>
            </a>
            <div class="collapse" id="layouts">

              <ul class="navbar-nav ps-3">
                <li>
                  <a href="<?php echo constant('URL') ?>proveedores" class="nav-link px-3" data-turbolinks='false'>
                    <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                    <span>Proveedores</span>
                  </a>
                </li>
              </ul>

              <ul class="navbar-nav ps-3">
                <li>
                  <a href="<?php echo constant('URL') ?>usuarios" class="nav-link px-3" data-turbolinks='false'>
                    <span class="me-2"><i class="bi bi-people-fill"></i></span>
                    <span>Usuarios</span>
                  </a>
                </li>
              </ul>

            </div>
          </li>
          <li>
            <a href="#" class="nav-link px-3">
              <span class="me-2"><i class="bi bi-book-fill"></i></span>
              <span>Pages</span>
            </a>
          </li>
          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!----------------------------------------------->

  <main class="mt-5 pt-3">