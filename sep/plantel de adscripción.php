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
        plantel de adscripción
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

  $sql = "SELECT * FROM plantel_adscripcion INNER JOIN datos_generales ON plantel_adscripcion.id_datos_generales = datos_generales.id_datos_generales WHERE curp='$curp'";
  $cs = mysqli_query($conn, $sql) or die ("algo salio mal");
  
  if(mysqli_num_rows($cs) > 0){
      $result = mysqli_fetch_assoc($cs);
      $id_p = $result['id_datos_adscrip'];
      $subsistema = $result['subsistema'];
      $sosten = $result['tipo_sostenimiento'];
      $nombrep = $result['nombre_plantel'];
      $clave = $result['clave_plantel'];
      $cargo = $result['cargo_ocupacion'];
      $fecha = $result['fecha_captura'];
      $antiguedada = $result['antiguedad_años'];
      $antiguedadm = $result['antiguedad_meses'];
      $horas = $result['hrs_frente_grupo'];
      $contratacio = $result['tipo_contratacion'];
      $calle = $result['calle_plantel'];
      $num = $result['num_plantel'];
      $colonia = $result['colonia_plantel'];
      $municipio = $result['municipio_plantel'];
      $cp = $result['cp_plantel'];
  } 
      else {

  }
}
}
?>

<form method="POST">
   <div class="form-container">
        <div class="form-section">

<label for="">susbsistema </label>
<input type="text" name="t1" value="<?php echo $subsistema;?>" readonly/>
<label for="">tipo de sostenimiento</label>
<input type="text" name="t2" value="<?php echo $sosten;?>" readonly/>
<label for="">nombre del plantel</label>
<input type="text" name="t3" value="<?php echo $nombrep;?>" readonly/>
<label for="">clave</label>
<input type="text" name="t3" value="<?php echo $clave;?>" readonly/>
<label for="">cargo</label>
<input type="text" name="t3" value="<?php echo $cargo;?>" readonly/>
<label for="">antiguedad</label>
<input type="text" name="t3" value="<?php echo $fecha;?>" readonly/>
<label for="">años y meses
<input type="text" name="t3" value="<?php echo $antiguedada;?>" readonly/> <input type="text" name="t3" value="<?php echo $antiguedadm;?>" readonly/>;
<label for="">horas frente a grupo(total) </label>
<input type="text" name="t3" value="<?php echo $horas;?>" readonly/>
<label for="">tipo de contratacion</label>
<input type="text" name="t3" value="<?php echo $contratacio;?>" readonly/>
<br>
</br>
<h4>direccion del plantel</h4>
<label for="">calle</label>
<input type="text" name="t3" value="<?php echo $calle;?>" readonly/>
<label for="">numero</label>
<input type="text" name="t3" value="<?php echo $num;?>" readonly/>
<label for="">colonia</label>
<input type="text" name="t3" value="<?php echo $colonia;?>" readonly/>
<label for="">municipio</label>
<input type="text" name="t3" value="<?php echo $municipio;?>" readonly/>
<label for="">cp</label>
<input type="text" name="t3" value="<?php echo $cp;?>" readonly/>
</form>

</div>
</div>
<form method="post">
    <input type="submit" name="salir" value="salir" class="inser2">
    </form>    
</body>
</html>
