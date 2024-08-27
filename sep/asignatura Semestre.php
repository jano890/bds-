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
        asignacion por semestre
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

  $sql = "SELECT * FROM asignatura_de_semestre INNER JOIN datos_generales ON asignatura_de_semestre.id_datos_generales = datos_generales.id_datos_generales WHERE curp='$curp'";
  $cs = mysqli_query($conn, $sql) or die ("algo salio mal");
  
  if(mysqli_num_rows($cs) > 0){
      $result = mysqli_fetch_assoc($cs);
      $asignatura11 = $result['asignatura1'];
      $num_grupos_atendidos11 = $result['num_grupos_atendidos1'];
      $num_alumnos_grupo11 = $result['num_alumnos_grupo1'];

      $asignatura21 = $result['asignatura2'];
      $num_grupos_atendidos21 = $result['num_grupos_atendidos2'];
      $num_alumnos_grupo21 = $result['num_alumnos_grupo2'];

      $asignatura31 = $result['asignatura3'];
      $num_grupos_atendidos31 = $result['num_grupos_atendidos3'];
      $num_alumnos_grupo31 = $result['num_alumnos_grupo3'];

      $asignatura12 = $result['asignatura4'];
      $num_grupos_atendidos12 = $result['num_grupos_atendidos4'];
      $num_alumnos_grupo12 = $result['num_alumnos_grupo4'];

      $asignatura22 = $result['asignatura5'];
      $num_grupos_atendidos22 = $result['num_grupos_atendidos5'];
      $num_alumnos_grupo22 = $result['num_alumnos_grupo5'];

      $asignatura32 = $result['asignatura6'];
      $num_grupos_atendidos32 = $result['num_grupos_atendidos6'];
      $num_alumnos_grupo32 = $result['num_alumnos_grupo6'];

      $asignatura13 = $result['asignatura7'];
      $num_grupos_atendidos13 = $result['num_grupos_atendidos7'];
      $num_alumnos_grupo13 = $result['num_alumnos_grupo7'];

      $asignatura23 = $result['asignatura8'];
      $num_grupos_atendidos23 = $result['num_grupos_atendidos8'];
      $num_alumnos_grupo23 = $result['num_alumnos_grupo8'];

      $asignatura33 = $result['asignatura9'];
      $num_grupos_atendidos33 = $result['num_grupos_atendidos9'];
      $num_alumnos_grupo33 = $result['num_alumnos_grupo9'];

      $asignatura14 = $result['asignatura10'];
      $num_grupos_atendidos14 = $result['num_grupos_atendidos10'];
      $num_alumnos_grupo14 = $result['num_alumnos_grupo10'];

      $asignatura24 = $result['asignatura11'];
      $num_grupos_atendidos24 = $result['num_grupos_atendidos11'];
      $num_alumnos_grupo24 = $result['num_alumnos_grupo11'];

      $asignatura34 = $result['asignatura12'];
      $num_grupos_atendidos34 = $result['num_grupos_atendidos12'];
      $num_alumnos_grupo34 = $result['num_alumnos_grupo12'];

      $asignatura15 = $result['asignatura13'];
      $num_grupos_atendidos15 = $result['num_grupos_atendidos13'];
      $num_alumnos_grupo15 = $result['num_alumnos_grupo13'];

      $asignatura25 = $result['asignatura14'];
      $num_grupos_atendidos25 = $result['num_grupos_atendidos14'];
      $num_alumnos_grupo25 = $result['num_alumnos_grupo14'];

      $asignatura35 = $result['asignatura15'];
      $num_grupos_atendidos35 = $result['num_grupos_atendidos15'];
      $num_alumnos_grupo35 = $result['num_alumnos_grupo15'];

      $asignatura16 = $result['asignatura16'];
      $num_grupos_atendidos16 = $result['num_grupos_atendidos16'];
      $num_alumnos_grupo16 = $result['num_alumnos_grupo16'];

      $asignatura26 = $result['asignatura17'];
      $num_grupos_atendidos26 = $result['num_grupos_atendidos17'];
      $num_alumnos_grupo26 = $result['num_alumnos_grupo17'];

      $asignatura36 = $result['asignatura18'];
      $num_grupos_atendidos36 = $result['num_grupos_atendidos18'];
      $num_alumnos_grupo36 = $result['num_alumnos_grupo18'];
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
          <h4> semestre 1</h4>
        <label for="">asignatura 1 </label>
<input type="text" name="t1" value="<?php echo $asignatura11;?>" readonly/>
<label for="">grupos atenndidos</label>
<input type="text" name="t2" value="<?php echo $num_grupos_atendidos11;?>" readonly/>
<label for="">alumnos atendidos</label>
<input type="text" name="t2" value="<?php echo $num_alumnos_grupo11;?>" readonly/>

<br>
</br>
<label for="">asignatura 2 </label>
<input type="text" name="t1" value="<?php echo $asignatura21;?>" readonly/>
<label for="">grupos atenndidos</label>
<input type="text" name="t2" value="<?php echo $num_grupos_atendidos21;?>" readonly/>
<label for="">alumnos atendidos</label>
<input type="text" name="t2" value="<?php echo $num_alumnos_grupo21;?>" readonly/>
<br>
</br>
<label for="">asignatura 3 </label>
<input type="text" name="t1" value="<?php echo $asignatura31;?>" readonly/>
<label for="">grupos atenndidos</label>
<input type="text" name="t2" value="<?php echo $num_grupos_atendidos31;?>" readonly/>
<label for="">alumnos atendidos</label>
<input type="text" name="t2" value="<?php echo $num_alumnos_grupo31;?>" readonly/>
</fieldset>
<br>
</br>
<fieldset>
<h4> semestre 2</h4>
        <label for="">asignatura 1 </label>
<input type="text" name="t1" value="<?php echo $asignatura12;?>" readonly/>
<label for="">grupos atenndidos</label>
<input type="text" name="t2" value="<?php echo $num_grupos_atendidos12;?>" readonly/>
<label for="">alumnos atendidos</label>
<input type="text" name="t2" value="<?php echo $num_alumnos_grupo12;?>" readonly/>
<br>
</br>
<label for="">asignatura 2 </label>
<input type="text" name="t1" value="<?php echo $asignatura22;?>" readonly/>
<label for="">grupos atenndidos</label>
<input type="text" name="t2" value="<?php echo $num_grupos_atendidos22;?>" readonly/>
<label for="">alumnos atendidos</label>
<input type="text" name="t2" value="<?php echo $num_alumnos_grupo22;?>" readonly/>
<br>
</br>
<label for="">asignatura 3 </label>
<input type="text" name="t1" value="<?php echo $asignatura32;?>" readonly/>
<label for="">grupos atenndidos</label>
<input type="text" name="t2" value="<?php echo $num_grupos_atendidos32;?>" readonly/>
<label for="">alumnos atendidos</label>
<input type="text" name="t2" value="<?php echo $num_alumnos_grupo32;?>" readonly/>
</fieldset>
<br>
</br>
<fieldset>
<h4> semestre 3</h4>
        <label for="">asignatura 1 </label>
<input type="text" name="t1" value="<?php echo $asignatura13;?>" readonly/>
<label for="">grupos atenndidos</label>
<input type="text" name="t2" value="<?php echo $num_grupos_atendidos13;?>" readonly/>
<label for="">alumnos atendidos</label>
<input type="text" name="t2" value="<?php echo $num_alumnos_grupo13;?>" readonly/>
<br>
</br>
<label for="">asignatura 2 </label>
<input type="text" name="t1" value="<?php echo $asignatura23;?>" readonly/>
<label for="">grupos atenndidos</label>
<input type="text" name="t2" value="<?php echo $num_grupos_atendidos23;?>" readonly/>
<label for="">alumnos atendidos</label>
<input type="text" name="t2" value="<?php echo $num_alumnos_grupo23;?>" readonly/>
<br>
</br>
<label for="">asignatura 3 </label>
<input type="text" name="t1" value="<?php echo $asignatura33;?>" readonly/>
<label for="">grupos atenndidos</label>
<input type="text" name="t2" value="<?php echo $num_grupos_atendidos33;?>" readonly/>
<label for="">alumnos atendidos</label>
<input type="text" name="t2" value="<?php echo $num_alumnos_grupo33;?>" readonly/>
</fieldset>
<br>
</br>
<fieldset>
<h4> semestre 4</h4>
        <label for="">asignatura 1 </label>
<input type="text" name="t1" value="<?php echo $asignatura14;?>" readonly/>
<label for="">grupos atenndidos</label>
<input type="text" name="t2" value="<?php echo $num_grupos_atendidos14;?>" readonly/>
<label for="">alumnos atendidos</label>
<input type="text" name="t2" value="<?php echo $num_alumnos_grupo14;?>" readonly/>
<br>
</br>
<label for="">asignatura 2 </label>
<input type="text" name="t1" value="<?php echo $asignatura24;?>" readonly/>
<label for="">grupos atenndidos</label>
<input type="text" name="t2" value="<?php echo $num_grupos_atendidos24;?>" readonly/>
<label for="">alumnos atendidos</label>
<input type="text" name="t2" value="<?php echo $num_alumnos_grupo24;?>" readonly/>
<br>
</br>
<label for="">asignatura 3 </label>
<input type="text" name="t1" value="<?php echo $asignatura34;?>" readonly/>
<label for="">grupos atenndidos</label>
<input type="text" name="t2" value="<?php echo $num_grupos_atendidos34;?>" readonly/>
<label for="">alumnos atendidos</label>
<input type="text" name="t2" value="<?php echo $num_alumnos_grupo34;?>" readonly/>
</fieldset>
<br>
</br>
<fieldset>
<h4> semestre 5</h4>
        <label for="">asignatura 1 </label>
<input type="text" name="t1" value="<?php echo $asignatura15;?>" readonly/>
<label for="">grupos atenndidos</label>
<input type="text" name="t2" value="<?php echo $num_grupos_atendidos15;?>" readonly/>
<label for="">alumnos atendidos</label>
<input type="text" name="t2" value="<?php echo $num_alumnos_grupo15;?>" readonly/>
<br>
</br>
<label for="">asignatura 2 </label>
<input type="text" name="t1" value="<?php echo $asignatura25;?>" readonly/>
<label for="">grupos atenndidos</label>
<input type="text" name="t2" value="<?php echo $num_grupos_atendidos25;?>" readonly/>
<label for="">alumnos atendidos</label>
<input type="text" name="t2" value="<?php echo $num_alumnos_grupo25;?>" readonly/>
<br>
</br>
<label for="">asignatura 3 </label>
<input type="text" name="t1" value="<?php echo $asignatura35;?>" readonly/>
<label for="">grupos atenndidos</label>
<input type="text" name="t2" value="<?php echo $num_grupos_atendidos35;?>" readonly/>
<label for="">alumnos atendidos</label>
<input type="text" name="t2" value="<?php echo $num_alumnos_grupo25;?>" readonly/>
</fieldset>
<br>
</br>
<fieldset>
<h4> semestre 6</h4>
<label for="">asignatura 1 </label>
<input type="text" name="t1" value="<?php echo $asignatura16;?>" readonly/>
<label for="">grupos atenndidos</label>
<input type="text" name="t2" value="<?php echo $num_grupos_atendidos16;?>" readonly/>
<label for="">alumnos atendidos</label>
<input type="text" name="t2" value="<?php echo $num_alumnos_grupo16;?>" readonly/>
<br>
</br>
<label for="">asignatura 2 </label>
<input type="text" name="t1" value="<?php echo $asignatura26;?>" readonly/>
<label for="">grupos atenndidos</label>
<input type="text" name="t2" value="<?php echo $num_grupos_atendidos26;?>" readonly/>
<label for="">alumnos atendidos</label>
<input type="text" name="t2" value="<?php echo $num_alumnos_grupo26;?>" readonly/>
<br>
</br>
<label for="">asignatura 3 </label>
<input type="text" name="t1" value="<?php echo $asignatura36;?>" readonly/>
<label for="">grupos atenndidos</label>
<input type="text" name="t2" value="<?php echo $num_grupos_atendidos36;?>" readonly/>
<label for="">alumnos atendidos</label>
<input type="text" name="t2" value="<?php echo $num_alumnos_grupo36;?>" readonly/>
</fieldset>
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