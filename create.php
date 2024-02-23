<?php include("includes/header.php")?>


<div class ="card text-center">
    <div class="card-body">
        <h1 class="card-title">CREAR REGISTRO</h1>
        <p class="card-text">Ingrese los datos a continuación</p>

        <form action="save.php" method="POST">
            
            <div class="form-group">
            <input type="text" name="nombre" clas="form-control" placeholder="Ingrese Nombre" autofocus>
            </div>
            <div class="form-group">
            <input type="text" name="email" clas="form-control" placeholder="Ingrese email" autofocus>
            </div>

            <div class="form-group">
            <input type="text" name="telefono" clas="form-control" placeholder="Ingrese telefono" autofocus>
            </div>
            <select  name="tipo_empleado" clas="form-control">
                <option value="" selected="selected">Selecionar Tipo de Empleado</option>
                <option value="Medico">Medico</option>
                <option value="Limpieza">Limpieza</option>
                <option value="Administracion">Administracion</option>
             </select>

            </div>
            <input type="submit" class="btn btn-success" name="guardar_registro" value="Guardar">
        </form>
    </div>
</div>


<?php include("includes/footer.php")?>