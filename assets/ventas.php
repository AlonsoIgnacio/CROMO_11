<?php
include("config.php");
?>
<table class="table table-responsive-md">

    <!--Table head-->
    <thead class="cyan lighten-3">
      <tr>
          <th scope="row">1</th>
          <td><input type="text" placeholder="Filtro"/></td>
          <td><input type="text" placeholder="Filtro"/></td>
          <td><input type="text" placeholder="Filtro"/></td>
      </tr>
        <tr class="table-danger">
            <th>#</th>
            <th class="th-lg">Nombre</th>
            <th class="th-lg">Servicio</th>
            <th class="th-lg">Precio</th>
            <th class="th-lg">Botonera</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
            <?php
      										//Cargamos el array
      										$sql="SELECT
      														`id_venta`
      														, `tipo`
      														, `precio`
      														, `cliente`
      														, `descripcion`
      													FROM
      														`cromo`.`ventas`;";
      								$resultado=mysqli_query($conexion,$sql);
      							while($fila=mysqli_fetch_array($resultado))
      							{
      								$id_venta=$fila["id_venta"];
      								$tipo=$fila["tipo"];
      								$precio=$fila["precio"];
      								$cliente=$fila["cliente"];
                      $descripcion=$fila["descripcion"];
      								?>
              <tr>
                  <th scope="row"><?=$id_venta?></th>
                  <td><?=$cliente?></td>
                  <td><?=$descripcion?></td>
                  <td><?=$precio?></td>
                  <td><a class="btn btn-primary" href="#" role="button">Link</a></td>
              </tr>
        <?php } ?>
    </tbody>
    <!--Table body-->

</table>
