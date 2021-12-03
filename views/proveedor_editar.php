<?php
require_once("views/layouts/header.php");

if (isset($this->fila)) {
    $fila = $this->fila;
}

?>

<div class="container-fluid">

    <div class="row">
        <div class="col-md-12 mb-3 mt-3">
            <h4>Editar Proveedor</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-3">

            <!--Formulario Actualizar Registro-->
            <form action="<?php echo constant('URL') ?>proveedores/actualizar" method="post">

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="recipient-name" class="col-form-label">Codigo:</label>
                        <input type="text" class="form-control" id="" name="txtCodigo" value="<?php echo $fila['codigo'] ?>" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="recipient-name" class="col-form-label">Ruc:</label>
                        <input type="number" class="form-control" id="" name="txtRuc" value="<?php echo $fila['ruc'] ?>">
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="recipient-name" class="col-form-label">Razon Social:</label>
                        <input type="text" class="form-control" id="" name="txtRazonSocial" value="<?php echo $fila['razon_social'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="recipient-name" class="col-form-label">Direccion:</label>
                        <input type="text" class="form-control" id="" name="txtDireccion" value="<?php echo $fila['direccion'] ?>">
                    </div>
                </div>


                <div class="mb-3">
                    <label class="col-form-label">Tipo de Pago:</label>
                    <select class="form-select" aria-label="Default select example" name="txtTipoPago" value="<?php echo $fila['tipo_pago'] ?>">
                        <option value="tarjeta" <?php if ($fila['tipo_pago'] == "tarjeta") echo 'selected="selected"'; ?>>Tarjeta</option>
                        <option value="efectivo" <?php if ($fila['tipo_pago'] == "efectivo") echo 'selected="selected"'; ?>>Efectivo</option>
                    </select>
                </div>

                <div class="">
                    <a href="<?php echo constant('URL') ?>proveedores" class="btn btn-secondary" data-turbolinks='false'>Cancelar</a>
                    <button type="submit" class="btn btn-primary" data-turbolinks='false'>Guardar</button>
                </div>

            </form>
        </div>

    </div>
</div>

</div>


<?php
require_once("views/layouts/footer.php");
?>