<?php 
include 'menu.php';
include("conexion.php");
  $indice=0;
    $alumno=NULL;
    $conteo="SELECT count(*) as n FROM medicamento_tipo_dos";
    $cont=$conne->query($conteo);
    $row2 = $cont->fetch();
    $total= $row2["n"];//
    $sql="SELECT  * FROM medicamento_tipo_dos"; 
    $consulta=$conne->query($sql);
   // echo $sql; 
    while ($row = $consulta->fetch()){
      $ejercicios[$indice]              =new stdClass;
      $ejercicios[$indice]->principio_activo          =$row["principio_activo"];
      $ejercicios[$indice]->tiempo =$row["tiempo"];
      $ejercicios[$indice]->efectos_adversos =$row["efectos_adversos"];

     // $verduras[$indice]->img ="../img/verduras/"+$verduras[$indice]->imge;


      $indice++;
    }
?>

 <section class="form">
   <form action="menu_P.php">
    <center><button type="submit" class="btn btn-secondary button" name="continuar" value="Volver al menú">Volver al menú</button></center>
</form>
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #fa0303">ADVERTENCIA</h5>
        <button type="button" class="btn-close" aria-label="Close"  onclick="cerrarmodal()">X</button>
      </div>
      <div class="modal-body">
        <h4>No es recomendable el uso de estos medicamentos.<br>
        Consulte a su médico.</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" onclick="cerrarmodal()">Close</button>
      </div>
    </div>
  </div>
</div>

</section>
</br>
<div class="container">
<div class="table-responsive " >
<table class="table table-info">
  <thead>

    <tr class="table-light">
      <th scope="col">Principio Activo</th>
      <th scope="col">Tiempo</th>
      <th scope="col">Efectos adversos</th>
    </tr>
   </thead>
  <tbody>
    <?php 
    if($total!=0){
    foreach ($ejercicios as $i => $cel) { ?>
    <tr>
      
      <td><?=$cel->principio_activo;?> </td>
      <td><?=$cel->tiempo;?> </td>
      <td><?=$cel->efectos_adversos;?> </td>


      </tr>
      <?php }} ?>
  </tbody>
</table>
</div>
</div>
 <?
include("pie.php");
?>
<script type="text/javascript">
 

    if (document.addEventListener){
      $('#myModal').modal('show')
    }
  function cerrarmodal(){
  

  $('#myModal').modal('hide');
  my
}
</script>