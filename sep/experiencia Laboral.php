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
        experiencia laboral
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

  $sql = "SELECT * FROM experiencia_laboral INNER JOIN datos_generales ON experiencia_laboral.id_datos_generales = datos_generales.id_datos_generales WHERE curp='$curp'";
  $cs = mysqli_query($conn, $sql) or die ("algo salio mal");
  
  if(mysqli_num_rows($cs) > 0){
      $result = mysqli_fetch_assoc($cs);
      $nil = $result['nom_institucion_laboral'];
      $pl = $result['puesto_laboral'];
      $al = $result['años_laboral'];
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
<label for="">nombre de la empresa</label>
<input type="text" name="t1" value="<?php echo $nil;?>" readonly/>
<label for="">puestos</label>
<input type="text" name="t1" value="<?php echo $pl;?>" readonly/>
<label for="">años laborados</label>
<input type="text" name="t2" value="<?php echo $al;?>" readonly/>
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