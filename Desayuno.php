<?php 
	include 'menu.php';
	$idUser=$_SESSION['id'];
	include 'conexion.php';
  $indice=0;
    $Desayuno=NULL;
    $conteo="SELECT count(*) as n FROM (((((((desayuno inner join carnes on desayuno.idCarne=carnes.ID_CARNES) inner join frutas on desayuno.idFruta=frutas.ID_FRUTAS) inner join verduras on desayuno.idVerdura=verduras.ID_VERDURAS)  inner join cereales on cereales.ID_CEREALES=desayuno.idCereal) inner join leguminosas on desayuno.idLeguminosa=leguminosas.ID_LEGUMINOSAS)inner join grasasinp on grasasinp.ID_GRASASINP=desayuno.idGrasaSinProteinas)inner join grasaconp on grasaconp.ID_GRASACONP=desayuno.idGrasaConProteinas) inner join leche on leche.ID_LECHE=desayuno.idLeche where idIniciar_sesion='$idUser'";
    $cont=$conne->query($conteo);
    $row2 = $cont->fetch();
    $total= $row2["n"];//
    $sql="SELECT desayuno.ID_Dieta, desayuno.fechaHora, desayuno.TOTALcalorias,desayuno.TOTALcarbohidratos, desayuno.TOTALproteinas, desayuno.TOTALfibras, desayuno.TOTALgrasas, desayuno.TOTALcolesterol, carnes.NombreCar as carne,  frutas.NombreFru as fruta, verduras.NombreVerd as verdura, cereales.NombreCer as cereal, leguminosas.NombreLegu as leguminosas, grasaconp.NombreGrac as grasaconp, grasasinp.NombreGras as grasasinp, leche.NombreLec as leche FROM (((((((desayuno inner join carnes on desayuno.idCarne=carnes.ID_CARNES) inner join frutas on desayuno.idFruta=frutas.ID_FRUTAS) inner join verduras on desayuno.idVerdura=verduras.ID_VERDURAS)  inner join cereales on cereales.ID_CEREALES=desayuno.idCereal) inner join leguminosas on desayuno.idLeguminosa=leguminosas.ID_LEGUMINOSAS)inner join grasasinp on grasasinp.ID_GRASASINP=desayuno.idGrasaSinProteinas)inner join grasaconp on grasaconp.ID_GRASACONP=desayuno.idGrasaConProteinas) inner join leche on leche.ID_LECHE=desayuno.idLeche where idIniciar_sesion='$idUser'";
   // echo $sql;
    $consulta=$conne->query($sql);
    while ($row = $consulta->fetch()){
      $Desayuno[$indice]              =new stdClass;
      $Desayuno[$indice]->id          =$row["ID_Dieta"];
      $Desayuno[$indice]->fechaHora          =$row["fechaHora"];
      $Desayuno[$indice]->TOTALcalorias =$row["TOTALcalorias"];
      $Desayuno[$indice]->TOTALcarbohidratos=$row["TOTALcarbohidratos"];
      $Desayuno[$indice]->TOTALproteinas          =$row["TOTALproteinas"];
      $Desayuno[$indice]->TOTALgrasas =$row["TOTALgrasas"];
      $Desayuno[$indice]->TOTALfibras          =$row["TOTALfibras"];
      $Desayuno[$indice]->TOTALcolesterol          =$row["TOTALcolesterol"];
      $Desayuno[$indice]->carne =$row["carne"];
      $Desayuno[$indice]->fruta =$row["fruta"];
      $Desayuno[$indice]->verdura =$row["verdura"];
      $Desayuno[$indice]->cereal =$row["cereal"];
      $Desayuno[$indice]->leguminosas =$row["leguminosas"];
      $Desayuno[$indice]->grasaconp =$row["grasaconp"];
      $Desayuno[$indice]->grasasinp =$row["grasasinp"];
      $Desayuno[$indice]->leche =$row["leche"];
      $indice++;
    }

?>

<div class="table-responsive card" style="height: calc(100vh - 270px)">
<table class="table table-sm table-hover" style="text-align: center;">
  <thead class="thead-dark">

    <tr>
      <th scope="col">fecha y hora</th>
      <th scope="col">Carne</th>
      <th scope="col">Fruta</th>
      <th scope="col">Verdura</th>
      <th scope="col">Cereal</th>
      <th scope="col">Leguminosas</th>
      <th scope="col">Grasas con proteínas</th>
      <th scope="col">Grasas sin proteínas </th>
      <th scope="col">Leche</th>
      <th scope="col">Total calorías</th>
      <th scope="col">Total carbohidratos </th>
      <th scope="col">Total proteinas</th>
      <th scope="col">Total grasas</th>
      <th scope="col">Total fibras  </th>
      <th scope="col">Total colesterol</th>
          </tr>
           </thead>
  <tbody>
    <?php 
    if($total!=0){
    foreach ($Desayuno as $i => $cel) { ?>
    <tr>
      
      <td><?=$cel->fechaHora;?> </td>
      <td><?=$cel->carne;?> </td>
      <td><?=$cel->fruta;?> </td>
      <td><?=$cel->verdura;?> </td>
      <td><?=$cel->cereal;?> </td>
      <td><?=$cel->leguminosas;?> </td>
      <td><?=$cel->grasaconp;?> </td>
      <td><?=$cel->grasasinp;?> </td>
      <td><?=$cel->leche ;?> </td>
      <td><?=$cel->TOTALcalorias;?> </td>
      <td><?=$cel->TOTALcarbohidratos;?> </td>
      <td><?=$cel->TOTALproteinas ;?> </td>
      <td><?=$cel->TOTALgrasas;?> </td>
      <td><?=$cel->TOTALfibras;?> </td>
      <td><?=$cel->TOTALcolesterol ;?> </td>

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
 <?php 
include("pie.php");
?>