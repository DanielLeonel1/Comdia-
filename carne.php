<?php 
include 'menu.php';
include("conexion.php");
  $indice=0;
    $alumno=NULL;
    $conteo="SELECT count(*) as n FROM carnes";
    $cont=$conne->query($conteo);
    $row2 = $cont->fetch();
    $total= $row2["n"];//
    $sql="SELECT  * FROM carnes WHERE category='1'"; 
    $consulta=$conne->query($sql);
   // echo $sql; 
    while ($row = $consulta->fetch()){
      $verduras[$indice]              =new stdClass;
      $verduras[$indice]->Nombre          =$row["NombreCar"];
      $verduras[$indice]->Cantidad =$row["Cantidad"];
      $verduras[$indice]->Tipo =$row["Tipo"];
      $verduras[$indice]->Energia =$row["Energia"];
      $verduras[$indice]->Carbohidratos =$row["Carbohidratos"];
      $verduras[$indice]->Proteinas =$row["Proteinas"];
      $verduras[$indice]->Lipidos =$row["Lipidos"];
      $verduras[$indice]->Fibra =$row["Fibra"];
      $verduras[$indice]->Colesterol =$row["Colesterol"];
      $verduras[$indice]->DiabetesTipo =$row["TipoDia"];
      $verduras[$indice]->imge =$row["img"];
     // $verduras[$indice]->img ="../img/verduras/"+$verduras[$indice]->imge;


      $indice++;
    }
?>
 <br>
  </br>
<div class="container">
<table class="table table-success">
  <thead>

    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Tipo</th>
      <th scope="col">Energía</th>
      <th scope="col">Carbohidratos</th>
      <th scope="col">Proteínas</th>
      <th scope="col">Lípidos</th>
      <th scope="col">Fibra</th>
      <th scope="col">Colesterol</th>
      <th scope="col">Tipo de diabetes</th>
      <th scope="col">IMG</th>
          </tr>
           </thead>
  <tbody>
    <?php 
    if($total!=0){
    foreach ($verduras as $i => $cel) { ?>
    <tr>
      
      <td><?=$cel->Nombre;?> </td>
      <td><?=$cel->Cantidad;?> </td>
      <td><?=$cel->Tipo;?> </td>
      <td><?=$cel->Energia;?> </td>
      <td><?=$cel->Carbohidratos;?> </td>
      <td><?=$cel->Proteinas;?> </td>
      <td><?=$cel->Lipidos;?> </td>
      <td><?=$cel->Fibra;?> </td>
      <td><?=$cel->Colesterol;?> </td>
      <td><?=$cel->DiabetesTipo ;?></td>
      <td> <img src="img/carne/<?= $cel->imge;?>" height ="100px" width = "110px"></img></td>

      </tr>
      <?php }} ?>
  </tbody>
</table>
</div>
</div>

<?php 
  $indice=0;
    $alumno=NULL;
    $conteo="SELECT count(*) as n FROM carnes";
    $cont=$conne->query($conteo);
    $row2 = $cont->fetch();
    $total= $row2["n"];//
    $sql="SELECT  * FROM carnes WHERE category='2'"; 
    $consulta=$conne->query($sql);
   // echo $sql; 
    while ($row = $consulta->fetch()){
      $verduras[$indice]              =new stdClass;
      $verduras[$indice]->Nombre          =$row["NombreCar"];
      $verduras[$indice]->Cantidad =$row["Cantidad"];
      $verduras[$indice]->Tipo =$row["Tipo"];
      $verduras[$indice]->Energia =$row["Energia"];
      $verduras[$indice]->Carbohidratos =$row["Carbohidratos"];
      $verduras[$indice]->Proteinas =$row["Proteinas"];
      $verduras[$indice]->Lipidos =$row["Lipidos"];
      $verduras[$indice]->Fibra =$row["Fibra"];
      $verduras[$indice]->Colesterol =$row["Colesterol"];
      $verduras[$indice]->DiabetesTipo =$row["TipoDia"];
      $verduras[$indice]->imge =$row["img"];
     // $verduras[$indice]->img ="../img/verduras/"+$verduras[$indice]->imge;


      $indice++;
    }
?>

</br>
<div class="container">
<table class="table table-warning">
  <thead>

    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Tipo</th>
      <th scope="col">Energía</th>
      <th scope="col">Carbohidratos</th>
      <th scope="col">Proteínas</th>
      <th scope="col">Lípidos</th>
      <th scope="col">Fibra</th>
      <th scope="col">Colesterol</th>
      <th scope="col">Tipo de diabetes</th>
      <th scope="col">IMG</th>
          </tr>
           </thead>
  <tbody>
    <?php 
    if($total!=0){
    foreach ($verduras as $i => $cel) { ?>
    <tr>
      
      <td><?=$cel->Nombre;?> </td>
      <td><?=$cel->Cantidad;?> </td>
      <td><?=$cel->Tipo;?> </td>
      <td><?=$cel->Energia;?> </td>
      <td><?=$cel->Carbohidratos;?> </td>
      <td><?=$cel->Proteinas;?> </td>
      <td><?=$cel->Lipidos;?> </td>
      <td><?=$cel->Fibra;?> </td>
      <td><?=$cel->Colesterol;?> </td>
      <td><?=$cel->DiabetesTipo ;?></td>
      <td> <img src="img/carne/<?= $cel->imge;?>" height ="100px" width = "115px" ></img></td>

      </tr>
      <?php }} ?>
  </tbody>
</table>
</div>
</div>

<?php 
  $indice=0;
    $alumno=NULL;
    $conteo="SELECT count(*) as n FROM carnes";
    $cont=$conne->query($conteo);
    $row2 = $cont->fetch();
    $total= $row2["n"];//
    $sql="SELECT  * FROM carnes WHERE category='3'"; 
    $consulta=$conne->query($sql);
   // echo $sql; 
    while ($row = $consulta->fetch()){
      $verduras[$indice]              =new stdClass;
      $verduras[$indice]->Nombre          =$row["NombreCar"];
      $verduras[$indice]->Cantidad =$row["Cantidad"];
      $verduras[$indice]->Tipo =$row["Tipo"];
      $verduras[$indice]->Energia =$row["Energia"];
      $verduras[$indice]->Carbohidratos =$row["Carbohidratos"];
      $verduras[$indice]->Proteinas =$row["Proteinas"];
      $verduras[$indice]->Lipidos =$row["Lipidos"];
      $verduras[$indice]->Fibra =$row["Fibra"];
      $verduras[$indice]->Colesterol =$row["Colesterol"];
      $verduras[$indice]->DiabetesTipo =$row["TipoDia"];
      $verduras[$indice]->imge =$row["img"];
     // $verduras[$indice]->img ="../img/verduras/"+$verduras[$indice]->imge;


      $indice++;
    }
?>

</br>
<div class="container">
<table class="table table-danger">
  <thead>

    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Tipo</th>
      <th scope="col">Energía</th>
      <th scope="col">Carbohidratos</th>
      <th scope="col">Proteínas</th>
      <th scope="col">Lípidos</th>
      <th scope="col">Fibra</th>
      <th scope="col">Colesterol</th>
      <th scope="col">Tipo de diabetes</th>
      <th scope="col">IMG</th>
          </tr>
           </thead>
  <tbody>
    <?php 
    if($total!=0){
    foreach ($verduras as $i => $cel) { ?>
    <tr>
      
      <td><?=$cel->Nombre;?> </td>
      <td><?=$cel->Cantidad;?> </td>
      <td><?=$cel->Tipo;?> </td>
      <td><?=$cel->Energia;?> </td>
      <td><?=$cel->Carbohidratos;?> </td>
      <td><?=$cel->Proteinas;?> </td>
      <td><?=$cel->Lipidos;?> </td>
      <td><?=$cel->Fibra;?> </td>
      <td><?=$cel->Colesterol;?> </td>
      <td><?=$cel->DiabetesTipo ;?></td>
      <td> <img src="img/carne/<?= $cel->imge;?>" height ="100px" width = "110px"></img></td>

      </tr>
      <?php }} ?>
  </tbody>
</table>
</div>
</div>
<?php 
include("fotter.php");
?>