<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="diseño5.css">
<div id="cont">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/SEP_Logo_2019.svg/1200px-SEP_Logo_2019.svg.png" alt="sep" id="imagen1">
        <img src="https://seeklogo.com/images/Q/queretaro-logo-83188D1A17-seeklogo.com.png" alt="qro" id="qro">
        <h1 class="est">educacion del estado de queretaro</h1>
    </div>
    <div class="tit">
      <h3>
        nivel de estudio
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

  $sql = "SELECT * FROM estudios_realizados INNER JOIN datos_generales ON estudios_realizados.id_datos_generales = datos_generales.id_datos_generales WHERE curp='$curp'";
  $cs = mysqli_query($conn, $sql) or die ("algo salio mal");
  
  if(mysqli_num_rows($cs) > 0){
      $result = mysqli_fetch_assoc($cs);
      $i= $result['id_datos_generales'];
      $gb = $result['grado_obtenido_bachillerato'];
      $eb = $result['estudios_realizados_bachillerato'];
      $cb = $result['campo_disciplinar_bachillerato'];
      $ib = $result['institucion_bachillerato'];
      $gl = $result['grado_obtenido_licenciatura'];
      $el = $result['estudios_realizados_licenciatura'];
      $cl = $result['campo_diciplinar_licenciatura'];
      $il = $result['institucion_licenciatura'];
      $gm = $result['grado_obtenido_maestria'];
      $em = $result['estudios_realizados_maestria'];
      $cm = $result['campo_diciplinar_maestria'];
      $im = $result['institucion_maestria'];
      $gd = $result['grado_obtenido_doctorado'];
      $ed = $result['estudios_relizados_doctorado'];
      $cd = $result['campo_diciplinar_doctoraddo'];
      $id = $result['institucion_doctorado'];
      $sab = $result['comicionado_sabatico_de'];
      $sab2 = $result['comicionado_sabatico_a'];
  } 
      else {

  }
}
}
?>

<form method="POST">
   <div class="form-container">
        <div class="form-section">
<fieldset>
          <h4>bachillerato o carrera tecnica</h4>
        <label for="">grado obtenido</label>
<input type="text" name="t1" value="<?php echo $gb;?>" readonly/>
<label for="">estudio realizado</label>
<input type="text" name="t2" value="<?php echo $eb;?>" readonly/>
<label for="">campo diciplinar</label>
<input type="text" name="t2" value="<?php echo $cb;?>" readonly/>
<label for="">institucion</label>
<input type="text" name="t1" value="<?php echo $ib;?>" readonly/>
</fieldset>
<br>
</br>
<fieldset>
          <h4>licenciatura</h4>
        <label for="">grado obtenido</label>
<input type="text" name="t1" value="<?php echo $gl;?>" readonly/>
<label for="">estudio realizado</label>
<input type="text" name="t2" value="<?php echo $el;?>" readonly/>
<label for="">campo diciplinar</label>
<input type="text" name="t2" value="<?php echo $cl;?>" readonly/>
<label for="">institucion</label>
<input type="text" name="t1" value="<?php echo $il;?>" readonly/>
</fieldset>
<br>
</br>
<fieldset>
          <h4>maestria</h4>
        <label for="">grado obtenido</label>
<input type="text" name="t1" value="<?php echo $gm;?>" readonly/>
<label for="">estudio realizado</label>
<input type="text" name="t2" value="<?php echo $em;?>" readonly/>
<label for="">campo diciplinar</label>
<input type="text" name="t2" value="<?php echo $cm;?>" readonly/>
<label for="">institucion</label>
<input type="text" name="t1" value="<?php echo $im;?>" readonly/>
</fieldset>
<br>
</br>
<fieldset>
          <h4>doctorado</h4>
        <label for="">grado obtenido</label>
<input type="text" name="t1" value="<?php echo $gd;?>" readonly/>
<label for="">estudio realizado</label>
<input type="text" name="t2" value="<?php echo $ed;?>" readonly/>
<label for="">campo diciplinar</label>
<input type="text" name="t2" value="<?php echo $cd;?>" readonly/>
<label for="">institucion</label>
<input type="text" name="t1" value="<?php echo $id;?>" readonly/>
</fieldset>
<br>
</br>
<fieldset>
        <label for="">comisionado sabatico</label>
<label for="">horario</label>
<input type="text" name="t1" value="<?php echo $sab;?>" readonly/> <input type="text" name="t2" value="<?php echo $sab2;?>" readonly/>
</fieldset>
<br>
</br>
</form>
</div>
</div>
<form method="post">
    <input type="submit" name="salir" value="salir" class="inser2">
    </form>    
</body>
</html>

</body>
</html>