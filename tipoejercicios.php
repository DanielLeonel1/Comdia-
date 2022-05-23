  <?php 
include 'menu.php';
include("conexion.php");
  $indice=0;
    $alumno=NULL;
    $conteo="SELECT count(*) as n FROM ejercicios";
    $cont=$conne->query($conteo);
    $row2 = $cont->fetch();
    $total= $row2["n"];//
    $sql="SELECT  * FROM ejercicios "; 
    $consulta=$conne->query($sql);
   // echo $sql; 
    while ($row = $consulta->fetch()){
      $ejercicios[$indice]              =new stdClass;
      $ejercicios[$indice]->Nombre          =$row["nombre_ejercicio"];
      $ejercicios[$indice]->Ritmo =$row["ritmo_ejercicio"];
      $ejercicios[$indice]->Repeticiones =$row["repeticiones_ejercicio"];
      $ejercicios[$indice]->Musculos =$row["musculo_a_trabajar"];
      $ejercicios[$indice]->img =$row["img"];

     // $verduras[$indice]->img ="../img/verduras/"+$verduras[$indice]->imge;


      $indice++;
    }
?>

 <section class="form">
</section>
</br>
<div class="container">
<div class="table-responsive " >
<table class="table table-info">
  <thead>

    <tr class="table-light">
      <th scope="col">Nombre</th>
      <th scope="col">Ritmo</th>
      <th scope="col">Repeticiones</th>
      <th scope="col">Músculos a trabajar</th>
      <th scope="col">IMG</th>
          </tr>
           </thead>
           <tbody>
    <?php 
    if($total!=0){
    foreach ($ejercicios as $i => $cel) { ?>
    <tr>
      
      <td><?=$cel->Nombre;?> </td>
      <td><?=$cel->Ritmo;?> </td>
      <td><?=$cel->Repeticiones;?> </td>
      <td><?=$cel->Musculos;?> </td>
  

      <td> <img src="img/ejercicios/<?= $cel->img;?>" height ="120px" ></img></td>

      </tr>
      <?php }} ?>
  </tbody>
</table>
</div>
</div>
 <?
include("fotter.php");
?>