<?php 
$value=(isset($_GET['value']) and trim($_GET['value'])!="")? $_GET['value']:"";
include("encabezado.php");
?>
 <body background="img/fondo.jpeg">
<div class="container mt-5 col-6 justify-content-md-center "style="text-align: center;"  > 
  <form class=" p-3 form card  " action="conlogin.php" method="post" > 
    <div class="container"   > 
          <div class="form-group"><h1>INICIAR SESIÓN </h1></div>
          <div class="form-group">
            <label for="email" style="">EMAIL:</label>
            <div class="input-group justify-content-md-center">
            <div class="input-group-prepend  ">
            <button   class="form-control" type="button" disabled><i class="fas fa-user"></i></button>
            </div>
          <input type="text" name="email" id="email" class="form-control col-7" placeholder="EMAIL...">
          </div>
          </div>
          <div class="form-group" >
            <label for="password">CONTRASEÑA:</label> 
            <!-- codigo del ojito-->
            <div class="input-group mb-3 justify-content-md-center">
            <div class="input-group-prepend">
            <button   class="form-control" type="button" disabled><i class="fas fa-lock"></i></button>
            </div>
          <input type="password" name="contra" id="contra" class="col-6 form-control bg-transparent border-right-0" placeholder="CONTRASEÑA..."><button disabled class="form-control col-1 bg-transparent border-left-0"> <i class="fa fa-eye" id="mostrar" > </i></button>
          </div>
          </div>
          <!-- codigo del ojito-->
          <DIV class="form-group " >
            <div class="input-group mb-3 justify-content-md-center">
           <button  type="submit" class=" btn btn-dark  btn-block col-3" id="iniciar" style="text-align:center">Iniciar</button>
          </div>
          </DIV>      
          <div class="form-group">
            <a href="registrate.php">Regístrate</a>
          </div>
          <span id="resultado" ><?=$value;?> </span>
  </form>
</div>
  <?php 
include("pie.php");
?>
<script type="text/javascript">
  $(document).ready( function(){//carga esta funcion cuando se carga todo el documneto
 
     $('#mostrar').click(function(){//
        if($(this).hasClass('fa-eye')){
            $('#contra').removeAttr('type');
            $('#mostrar').addClass('fa-eye-slash').removeClass('fa-eye');
          }
          else{
          $('#contra').attr('type','password');
          $('#mostrar').addClass('fa-eye').removeClass('fa-eye-slash');
        }
      });
  });
</script>
