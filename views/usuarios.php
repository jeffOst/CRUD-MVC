<?php
require_once("views/layouts/header.php");
?>

<div class="container-fluid">

    <div class="row">
        <div class="col-md-12 mb-3 mt-3">
            <h4>Lista de Usuarios</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">

            <!--Boton Agregar Registro-->
            <!-- Button trigger modal -->
            <button type="button" id="btnNuevo" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Agregar Registro
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel"> </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <!--Formulario Agregar Registro-->
                        <form id="formUsuarios">

                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Codigo:</label>
                                    <input type="text" class="form-control" id="id" readonly required>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Correo:</label>
                                        <input type="email" class="form-control" id="correo" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="col-form-label">Tipo de Usuario:</label>
                                    <select class="form-select" id="tipouser" aria-label="Default select example" required>
                                        <option selected>Seleccionar...</option>
                                        <option value="cliente">Cliente</option>
                                        <option value="administrador">Administrador</option>
                                    </select>
                                </div>


                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
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
                        <table id="tablaUsuarios" class="table table-striped data-table" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Tipo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Tipo</th>
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


</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.min.js" integrity="sha512-ifx27fvbS52NmHNCt7sffYPtKIvIzYo38dILIVHQ9am5XGDQ2QjSXGfUZ54Bs3AXdVi7HaItdhAtdhKz8fOFrA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script data-turbolinks-eval='false' src="<?php echo constant('URL') ?>public/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo constant('URL') ?>public/js/jquery-3.5.1.js"></script>
<script src="<?php echo constant('URL') ?>public/js/jquery.dataTables.min.js"></script>
<script src="<?php echo constant('URL') ?>public/js/dataTables.bootstrap5.min.js"></script>

<script>
    var url = "<?php echo constant('URL') ?>";
</script>

<script src="<?php echo constant('URL') ?>public/js/users.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?php echo constant('URL') ?>public/js/eliminar_registro.js"></script>
</body>
</html>