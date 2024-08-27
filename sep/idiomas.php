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

  $sql = "SELECT * FROM idiomas INNER JOIN datos_generales ON idiomas.id_datos_generales = datos_generales.id_datos_generales WHERE curp='$curp'";
  $cs = mysqli_query($conn, $sql) or die ("algo salio mal");
  
  if(mysqli_num_rows($cs) > 0){
      $result = mysqli_fetch_assoc($cs);
      $lm1 = $result['lengua_materna'];
      $idi1 = $result['idioma1'];
      $le1 = $result['lectura1'];
      $es1 = $result['escritura1'];
      $ha1 = $result['hablado1'];
      $idi2 = $result['idioma2'];
      $le2 = $result['lectura2'];
      $es2 = $result['escritura2'];
      $ha2 = $result['hablado1'];

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
<label for="">lengua materna</label>
<input type="text" name="t1" value="<?php echo $lm1;?>" readonly/>
<br>
</br>
<label for="">1er idioma</label>
<input type="text" name="t1" value="<?php echo $idi1;?>" readonly/>
<label for="">lectura %</label>
<input type="text" name="t1" value="<?php echo $le1;?>" readonly/>
<label for="">escritura %</label>
<input type="text" name="t2" value="<?php echo $es1;?>" readonly/>
<label for="">habla %</label>
<input type="text" name="t2" value="<?php echo $ha1;?>" readonly/>
<br>
</br>
<label for="">2do idioma</label>
<input type="text" name="t1" value="<?php echo $idi2;?>" readonly/>
<label for="">lectura %</label>
<input type="text" name="t1" value="<?php echo $le2;?>" readonly/>
<label for="">escritura %</label>
<input type="text" name="t2" value="<?php echo $es2;?>" readonly/>
<label for="">habla %</label>
<input type="text" name="t2" value="<?php echo $ha2;?>" readonly/>
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