<?php
require_once("views/layouts/header.php");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-3 mt-3">
            <h4>Lista de Proveedores</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">

            <!--Boton Agregar Registro-->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Agregar Registro
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Insertar Registro</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form action="<?php echo constant('URL') ?>proveedores/agregar" method="post">

                            <div class="modal-body">
                                <!--Formulario Agregar Registro-->
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Codigo:</label>
                                        <input type="text" class="form-control" id="" name="txtCodigo" value="0" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Ruc:</label>
                                        <input type="number" class="form-control" id="" name="txtRuc">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Razon Social:</label>
                                        <input type="text" class="form-control" id="" name="txtRazonSocial">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Direccion:</label>
                                        <input type="text" class="form-control" id="" name="txtDireccion">
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label class="col-form-label">Tipo de Pago:</label>
                                    <select class="form-select" aria-label="Default select example" name="txtTipoPago">
                                        <option selected>Seleccionar...</option>
                                        <option value="tarjeta">Tarjeta</option>
                                        <option value="efectivo">Efectivo</option>
                                    </select>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Agregar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Fin Boton Agregar Registro-->

            <!--DataTables-->
            <div class="card">

                <div class="card-header">
                    <span><i class="bi bi-table me-2"></i></span> Data Table
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tableproveedor" class="table table-striped data-table" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Ruc</th>
                                    <th>Razon Social</th>
                                    <th>Direccion</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($this->tabla as $fila) {
                                ?>
                                    <tr>
                                        <td><?php echo $fila["codigo"] ?></td>
                                        <td><?php echo $fila["ruc"] ?></td>
                                        <td><?php echo $fila["razon_social"] ?></td>
                                        <td><?php echo $fila["direccion"] ?></td>
                                        <td>
                                            <a href="<?php echo constant('URL') ?>proveedores/editar?v=<?php echo base64_encode($fila['codigo'])?>" class="btn btn-warning">
                                                <i class="bi bi-pencil-fill"></i>
                                            </a>
                                            <a href="javascript:funCargarURL('<?php echo constant('URL')?>proveedores/eliminar?v=<?php echo base64_encode($fila["codigo"]) ?>')" class="btn btn-danger">
                                                <i class="bi bi-trash-fill"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Ruc</th>
                                    <th>Razon Social</th>
                                    <th>Direccion</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
            <!--Fin DataTables-->


        </div>
    </div>
</div>





<?php
require_once("views/layouts/footer.php");
?>