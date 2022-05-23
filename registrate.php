<?php 
include("encabezado.php");
?>
<body background="img/fondo.jpeg">
<div class="container mt-5 col-6 justify-content-md-center"style="text-align: center;"> 
  <form class=" p-3 form card " > 
  	          <div class="form-group"><h1>REGÍSTRATE </h1> </div>
          <div class="form-group">
            <label for="email" style="">INGRESAR EMAIL</label>
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
          <div class="form-group" >
            <label for="password">CONFIRMAR CONTRASEÑA:</label>
            <!-- codigo del ojito-->
            <div class="input-group mb-3 justify-content-md-center">
          <div class="input-group-prepend">
            <button   class="form-control" type="button" disabled><i class="fas fa-lock"></i></button>
          </div>
          <input type="password" name="contra2" id="contra2" class="col-6 form-control bg-transparent border-right-0" placeholder="CONTRASEÑA..."><button disabled class="form-control col-1 bg-transparent border-left-0"> <i class="fa fa-eye" id="mostrar2" > </i></button>
        </div>
          </div> 
          <!-- codigo del ojito-->
          <DIV class="form-group " >
            <div class="input-group mb-3 justify-content-md-center">
          <button  type="button" class=" btn btn-dark  btn-block col-3" id="iniciar" onclick="contraConfir()" style="text-align:center">Registrar</button>
        </div>
          </DIV>
          <div class="form-group" style="text-align: center"></br>
            <a href="login.php">Iniciar Sesión</a>
          </div>
          
          <span id="resultado"></span>

        </form>
        </body>
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
      $('#mostrar2').click(function(){//
        if($(this).hasClass('fa-eye')){
            $('#contra2').removeAttr('type');
            $('#mostrar2').addClass('fa-eye-slash').removeClass('fa-eye');
          }
          else{
          $('#contra2').attr('type','password');
          $('#mostrar2').addClass('fa-eye').removeClass('fa-eye-slash');
        }
      });
  });
  function contraConfir(){
    
    var contra=$('#contra').val();//se recuperan valore en javascript por medio de id
    var contra2=$('#contra2').val();
    var nombre=$('#email').val();
    if (contra != contra2) {
      alert("Las contraseñas debe de coincidir");
    }else{
      var parametros = {
      email : nombre,
      contra : contra
      };//Es un arreglo donde se define nombre:valor
      $.ajax({

        data:  parametros,
        url:   'iniciarsesion.php',
        type:  'post',
        beforeSend: function () {
          $('#iniciar').val("Conectando...");
        },
        success:  function () {
          
          $('#iniciar').val('Registrar');
         // alert(user);
          location.href='pag.php?correo='+nombre;
        },
        error: function(){
          alert("No se establecio comunicacion con el servidor.");

          $("#iniciar").attr('disabled',false);
        }
      });
    }
  }
</script>


