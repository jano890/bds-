<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="diseño4.css">
<div id="cont">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/SEP_Logo_2019.svg/1200px-SEP_Logo_2019.svg.png" alt="sep" id="imagen1">
        <img src="https://seeklogo.com/images/Q/queretaro-logo-83188D1A17-seeklogo.com.png" alt="qro" id="qro">
        <h1 class="est">educacion del estado de queretaro</h1>
    </div>
    <div class="tit">
      <h3>
        consultaduria de datos
      </h3>
    </div>
   
    <form method="post">
    <input type="submit" name="revisar" value="revisar" class="inser2" >
    </form>

<?php
include 'conexion.php';
session_start();
?>

<?php
if(isset($_POST["salir"])){
    $btn=$_POST["salir"];
    header("location:menu.php");
}
?>

<?php
if(isset($_POST["revisar"])){
$btn=$_POST["revisar"];
$curp=$_SESSION["curp"];
if($btn=="revisar"){

  $sql = "SELECT * FROM datos_generales WHERE curp='$curp'";
  $cs = mysqli_query($conn, $sql) or die ("algo salio mal");
  
  if(mysqli_num_rows($cs) > 0){
      $result = mysqli_fetch_assoc($cs);
      $id = $result['id_datos_generales'];
      $estatus = $result['estatus'];
      $ap_paterno = $result['ap_pad'];
      $ap_mat = $result['ap_mat'];
      $nom = $result['nom1'];
      $nom2 = $result['nom2'];
      $sexo = $result['sexo'];
      $fecha = $result['fecha_nacimiento'];
      $curp = $result['curp'];
      $rfc = $result['rfc'];
      $tell = $result['telefono_local'];
      $telc = $result['telefono_cel'];
      $edo = $result['edo_nacimiento'];
      $mail = $result['e_mail'];
      $nac = $result['nacionalidad'];
      $edoc = $result['edo_civil'];
      $compu = $result['tiene_computadora'];
      $inter = $result['tiene_internet'];
      $calle = $result['calle'];
      $nume = $result['num_ext'];
      $numi = $result['num_int'];
      $local = $result['localidad_residencia'];
      $cp = $result['cp'];
      $mun = $result['municipio_residencia'];
      $est = $result['estado_residencia'];
      $com = $result['comentario_domicilio'];
  } 
      else {

  }
}
}
?>


<form method="POST">
   <div class="form-container">
        <div class="form-section">
<label for="">estatus</label>
<input type="text" name="t2" value="<?php echo $estatus;?>" readonly/>
<label for="">apellido paterno</label>
<input type="text" name="t3" value="<?php echo $ap_paterno;?>" readonly/>
<label for="">apellido materno</label>
<input type="text" name="t3" value="<?php echo $ap_mat;?>" readonly/>
<label for="">primer nombre</label>
<input type="text" name="t3" value="<?php echo $nom;?>" readonly/>
<label for="">segundo nombre </label>
<input type="text" name="t3" value="<?php echo $nom2;?>" readonly/>
<label for="">sexo</label>
<input type="text" name="t3" value="<?php echo $sexo;?>" readonly/>
<label for="">fevha de nacimiento</label>
<input type="text" name="t3" value="<?php echo $fecha;?>" readonly/>
<label for="">curp</label>
<input type="text" name="t3" value="<?php echo $curp;?>" readonly/>
<label for="">rfc</label>
<input type="text" name="t3" value="<?php echo $rfc;?>" readonly/>
<label for="">telefono local</label>
<input type="text" name="t3" value="<?php echo $tell;?>" readonly/>
<label for="">telefono celular</label>
<input type="text" name="t3" value="<?php echo $telc;?>" readonly/>
<label for="">estado de nacimiento </label>
<input type="text" name="t3" value="<?php echo $edo;?>" readonly/>
<label for="">mail</label>
<input type="text" name="t3" value="<?php echo $mail;?>" readonly/>
<label for="">nacionalidad</label>
<input type="text" name="t3" value="<?php echo $nac;?>" readonly/>
<label for="">estado civil</label>
<input type="text" name="t3" value="<?php echo $edoc;?>" readonly/>
<label for="">equipo de computo</label>
<input type="text" name="t3" value="<?php echo $compu;?>" readonly/>
<label for="">servicio de internet </label>
<input type="text" name="t3" value="<?php echo $inter;?>" readonly/>
<label for="">calle </label>
<input type="text" name="t3" value="<?php echo $calle;?>" readonly/>
<label for="">numero exterior </label>
<input type="text" name="t3" value="<?php echo $nume;?>" readonly/>
<label for="">numero interior</label>
<input type="text" name="t3" value="<?php echo $numi;?>" readonly/>
<label for="">localidad</label>
<input type="text" name="t3" value="<?php echo $local;?>" readonly/>
<label for="">codigopostal</label>
<input type="text" name="t3" value="<?php echo $cp;?>" readonly/>
<label for="">municipio</label>
<input type="text" name="t3" value="<?php echo $mun;?>" readonly/>
<label for="">estado</label>
<input type="text" name="t3" value="<?php echo $est?>" readonly/>
</div>
</div>
<form method="post">
<label for="">comentario</label>
<input type="text" name="t3" value="" readonly/>
    <input type="submit" name="comentario_domicilio" value="enviar" class="inser2"> 
    </form>   
<form method="post">
    <input type="submit" name="salir" value="salir" class="inser2">
    </form>    
</body>
</html>
