<?= $this->extend('layouts/header') ?>

<?= $this->section('titulo') ?>
    Administrar usuarios
<?= $this->endSection() ?>



<?= $this->section('content') ?>

<h1>Administracion de muebles</h1>
    <div class="row">
        <div class="col-sm-4">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
                <span class="fas fa-user-plus"></span> Agregar
            </button>
        </div>
    </div>
    <hr>
    <div class="row">
        <hr>
    	<div class="col-sm-12">
    		<div id="tablaCargadaUsuarios"></div>
    	</div>
    </div>


    <!-- Modal -->
<div class="modal fade" id="modalAgregarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo mueble</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form id="frmAgregaUsuario">
       <label for="nombre">nombre</label>
                <input type="text" name="nombre" id=nombre class="form-control" required>


                <label for="nombre">tipo de madera</label>
                <input type="text" name="tipomadera" id=tipomadera class="form-control" required>


              

                <label for="nombre">costo de venta</label>
                <input type="text" name="costoventa" id=costoventa class="form-control" required>
                <label for="nombre">costo de compra</label>
                <input type="text" name="costocompra" id=costocompra class="form-control" required>


               
                <label for="nombre">fecha</label>
                <input type="text" name="fecha" id=fecha class="form-control" required>

       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnAgregarUsuario">Guardar</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalActualizarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar datos de mueble</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form id="frmAgregaUsuariou">
       <label for="nombre">nombre</label>
                <input type="text" name="nombre" id=nombre class="form-control" required>


                <label for="nombre">tipo de madera</label>
                <input type="text" name="tipomadera" id=tipomadera class="form-control" required>


              

                <label for="nombre">costo de venta</label>
                <input type="text" name="costoventa" id=costoventa class="form-control" required>
                <label for="nombre">costo de compra</label>
                <input type="text" name="costocompra" id=costocompra class="form-control" required>


               
                <label for="nombre">fecha</label>
                <input type="text" name="fecha" id=fecha class="form-control" required>

       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning" onclick="actualizarUsuario()">Actualizar</button>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>



