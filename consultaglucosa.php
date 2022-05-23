<?php 
	include("conexion.php");
  include("menu.php");
  $idUser=$_SESSION['id'];
	$indice=0;
  $glucosa=NULL;
  $conteo="SELECT count(*) as n FROM glucosa WHERE usuario='$idUser'";
    $cont=$conne->query($conteo);
    $row2 = $cont->fetch();
    $total= $row2["n"];
    $sql="SELECT id, nivel, fecha FROM glucosa WHERE usuario='$idUser'";
   
    $consulta=$conne->query($sql);
    while ($row = $consulta->fetch()){
      $Roles[$indice]              =new stdClass;
      $Roles[$indice]->id          =$row["id"];
      $Roles[$indice]->nivel          =$row["nivel"];
      $Roles[$indice]->fecha =$row["fecha"];
      $indice++;
    }
 ?>


<div class="container card">
	<label><h1>Consultar Glucosa</h1></label>
	
<table class="table table-warning">
  <thead class="thead-light  ">
    <tr>
      <th scope="col">Nivel</th>
      <th scope="col">Fecha</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
	<tbody>
		<?php
    if($total!=0){// Se compara que haya registro y si hay registro se mete al ciclo foreach.
     foreach ($Roles as $i => $cel) { //codigo emdebido incrustar codigo php en// arrelos $Roles[$i]Roles=["nombre:oscar,id:1","nombre:kevin,id:2"]?>
		<tr>
			<td><?=$cel->nivel;?> </td>
			<td><?=$cel->fecha;?> </td>
    	
      <td>  <a href="elimanarGlu.php?id=<?=$cel->id;?>" class="btn btn-danger">Eliminar</a></td>
</tr>
   		<?php }} ?>
  </tbody>
</table>
</div>
</br>
 <section class="form">
    <form action="menu_P.php">
    <center><input type="submit" class="button" name="continuar" value="Volver al menú"></center>
</form>
</section>
</br>