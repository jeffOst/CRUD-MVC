<?php
require_once("views/layouts/header.php");
?>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 mb-3 mt-3">
      <h4>Dashboard</h4>
    </div>
  </div>


  <div class="row">
    <div class="col-md-3 mb-3">
      <div class="card bg-primary text-white h-100">
        <div class="card-body py-5">Proveedores</div>
        <a href="<?php echo constant('URL')?>proveedores" class="text-white" style="text-decoration: none;" data-turbolinks='false'>
        <div class="card-footer d-flex">
          Ver Detalles
          <span class="ms-auto">
            <i class="bi bi-chevron-right"></i>
          </span>
        </div>
        </a>
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <div class="card bg-warning text-dark h-100">
        <div class="card-body py-5">Warning Card</div>
        <div class="card-footer d-flex">
          View Details
          <span class="ms-auto">
            <i class="bi bi-chevron-right"></i>
          </span>
        </div>
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <div class="card bg-success text-white h-100">
        <div class="card-body py-5">Success Card</div>
        <div class="card-footer d-flex">
          View Details
          <span class="ms-auto">
            <i class="bi bi-chevron-right"></i>
          </span>
        </div>
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <div class="card bg-danger text-white h-100">
        <div class="card-body py-5">Danger Card</div>
        <div class="card-footer d-flex">
          View Details
          <span class="ms-auto">
            <i class="bi bi-chevron-right"></i>
          </span>
        </div>
      </div>
    </div>
  </div>













  <?php
  require_once("views/layouts/footer.php");
  ?>