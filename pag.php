<?php
  session_start();
  include("conexion.php");
$id_diabetes          ="";
      $edad ="";
       $peso ="";
        $estatura ="";
$email=(isset($_GET['correo']) and trim($_GET['correo'])!="")? $_GET['correo']:"";
$flag=false;
if($email==""){
 $id_inicio=$_SESSION['id'];
 $registro="SELECT id_tipo_diabetes,edad,peso,estatura FROM usuario where id_inicio='$id_inicio' ";
 $consulta2=$conne->query($registro);
    if ($row = $consulta2->fetch()){

      $id_diabetes          =$row["id_tipo_diabetes"];
      $edad =$row["edad"];
       $peso =$row["peso"];
        $estatura =$row["estatura"];
    }
    $flag=true;

}

  $selet="selected='selected'";

  $indice=0;
    $Tipo=NULL;
    $sql="SELECT id,descripcion FROM tipo_diabetes";
    $consulta=$conne->query($sql);
    while ($row = $consulta->fetch()){
      $Tipo[$indice]              =new stdClass;
      $Tipo[$indice]->id          =$row["id"];
      $Tipo[$indice]->descripcion =$row["descripcion"];
      $indice++;
    }


include("encabezado.php");

  ?>
  <body background="../img/fondo.jpeg">
<div class="container mt-5 col-6 justify-content-md-center"style="text-align: center;">
  <form class="p-3 form card  " <?=($flag==true)?"action='actualizadatos.php'":"action='infousuario.php'";?> method="post">
       <div class="form-group"><h1>Por favor ingresa los siguientes datos.</h1> </div>


          <div class="form-group">
            <label  style="">Tipo de diabetes</label>
        <div class="input-group justify-content-md-center">
          <div class="input-group-prepend  ">
            <button   class="form-control" type="button" disabled><i class="fas fa-user"></i></button>
          </div>
          <select class="form-control col-7" id="tipo_diabetes" name="tipo_diabetes">
      <?php
        foreach ($Tipo as $i => $tip){
         ?>
         <option value= "<?= $tip->id; ?>"
          <?=($tip->id==$id_diabetes)?$selet:"";?>><?= $tip->descripcion; ?></option>
          <?php
           };
          ?>
        </select>
        </div>
          </div>
          <div class="form-group">
            <label style="">Edad</label>
            <div class="input-group justify-content-md-center">
          <div class="input-group-prepend  ">
            <button   class="form-control" type="button" disabled><i class="fas fa-user"></i></button>
          </div>
          <input type="number" name="edad" id="edad" class="form-control col-7" placeholder="Ingrese su edad" value="<?=$edad;?>">
        </div>
          </div>
          <div class="form-group">
            <label style="">Peso</label>
            <div class="input-group justify-content-md-center">
          <div class="input-group-prepend  ">
            <button   class="form-control" type="button" disabled><i class="fas fa-user"></i></button>
          </div>
          <input type="number" step="0.01" name="peso" id="peso" class="form-control col-7" placeholder="Ingrese su peso" value="<?=$peso;?>">
        </div>
          </div>
          <div class="form-group">
            <label style="">Estatura</label>
            <div class="input-group justify-content-md-center">
          <div class="input-group-prepend  ">
            <button   class="form-control" type="button" disabled><i class="fas fa-user"></i></button>
          </div>
          <input type="number" step="0.01" name="estatura" id="estatura" class="form-control col-7" placeholder="Ingrese su Estatura" value="<?=$estatura;?>">
        </div>
          </div>

          <input name="correo" value="<?=$email;?>" type="hidden" id="correo">
          <!-- codigo del ojito-->
          <DIV class="form-group ">
            <div class="input-group mb-3 justify-content-md-center">
          <button  type="submit" class=" btn btn-dark  btn-block col-3" id="iniciar"  style="text-align:center"><?=($flag==true)?"Actualizar":"Registrar";?></button>
        </div>
          </DIV>
          <div class="form-group" style="text-align: center">
            <a href="index.php">Inicio</a>
          </div>

          <span id="resultado"> </span>





        </form>
</br></br></br>
        <div id="cuerpo">


         <section id="contenido">

          <article class="hentry">

            <header class="entry-header">
              <h1 class="entry-title">
                CALCULE SU ÍNDICE DE MASA CORPORAL
              </h1>
        <figure >

            </header>

            <div>
        <form action="pag.php" method="post">
        <center><table class="calc">
          <tr><strong>POR FAVOR INGRESE LOS SIGUIENTES DATOS<strong></tr>
          <tr><td>PESO:</td><td><input type="text" name="peso" required=""></input></td></tr>
          <tr><td>ESTATURA:</td><td><input type="text" name="estatura" required=""></input></td></tr>
          <tr><td><input type="submit" value="calcular"></input></td></tr>
        </table></center>

        </form>
        <?php
        $imc=0;
        $peso = isset($_POST["peso"]) ? $_POST["peso"]:null;
        $estatura = isset($_POST["estatura"]) ? $_POST["estatura"]:null;
        if ($estatura !=0) {
          $imc = $peso/pow($estatura, 2);

        echo "</br></br>Su indice de masa corporal es: ".round($imc,2)."<br>";

        if ($imc < 18) {
          echo "<a>Peso bajo. Necesario valorar signos de desnutrición.
          Tu índice de masa corporal es muy bajo, te recomendamos consultar con un nutriólogo, después de sus recomendaciones puedes crear una serie de dietas en nuestra App.</a>";
        }
        elseif ($imc >= 18 && $imc <= 24.9) {
          echo "Normal. Tu índice de masa corporal es el indicado, ¡sigue así! Te invitamos a crear un seguimiento de tus dietas en nuestra App. No olvides consultar a tu nutriólogo de confianza.";
        }
        elseif ($imc >= 25 && $imc <= 26.9) {
          echo "Sobrepeso. Tu índice de masa corporal es alto te recomendamos crear una nueva dieta en nuestra App y además no olvides consultar con tu nutriólogo de confianza.";
        }
        elseif ($imc == 27) {
          echo "Obesidad. Tu índice de masa corporal es alto te recomendamos crear una nueva dieta en nuestra App y además no olvides consultar con tu nutriólogo de confianza.";
        }
        elseif ($imc >= 27 && $imc <= 29.9) {
          echo "Obesidad grado I. Riesgo relativo alto para desarrollar enfermedades cardiovasculares.
          Tu índice de masa corporal es alto te recomendamos crear una nueva dieta en nuestra App y además no olvides consultar con tu nutriólogo de confianza.";
        }
        elseif ($imc >= 30 && $imc <= 39.9 ) {
          echo " Obesidad grado II. Riesgo relativo muy alto para el desarrollo de enfermedades cardiovasculares.
          Tu índice de masa corporal es alto te recomendamos crear una nueva dieta en nuestra App y además no olvides consultar con tu nutriólogo de confianza.";
        }
        elseif ($imc >= 40) {
          echo "Obesidad grado III Extrema o Mórbida. Riesgo relativo extremadamente alto para el desarrollo de enfermedades cardiovasculares.
          Tu índice de masa corporal es alto te recomendamos crear una nueva dieta en nuestra App y además no olvides consultar con tu nutriólogo de confianza.";
        }
        }

        ?>
            </div>

          </article>
      </br></br>


        </section>
        <section class="form">
    <form action="index.php">
    <center><input type="submit" class="button" name="continuar" value="Volver al menú"></center>
</form>
</section>

        </div>
</br></br>




        </body>
</div>
  <?php
include("pie.php");
?>
