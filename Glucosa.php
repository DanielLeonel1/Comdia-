<?php
include 'menu.php';
include 'conexion.php';
$fecha=date("Y-m-d");
?>
<div class="container mt-5 col-6 justify-content-md-center card"style="text-align: center;" >    
<form action="glucosaBD.php" method="post" style="text-align: center;">
  <div class="container">
     <div class="form-group ">
      <label for="inputAddress"><h1>Nivel de Glucosa</h1></label>
      <input type="text" class="form-control" id="" name="nivel" placeholder="Ingresar">
    </div>
  </div>

     <div class="form-group ">
      <label for="inputAddress"><h1>Control</h1></label>
      <input type="date" class="form-control" id="" name="fecha" value="<?=$fecha;?>" placeholder="Ingresar">
  
  </div></br>
  <button type="submit" class="btn btn-primary  mb-5" name="registrar" >Registrar</button>
</form>
 </div>
</br></br>
</form>
</section>
</br>