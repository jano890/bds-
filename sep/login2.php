<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="diseño1.css">
    <div id="cont">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/SEP_Logo_2019.svg/1200px-SEP_Logo_2019.svg.png" alt="sep" id="imagen1">
        <img src="https://seeklogo.com/images/Q/queretaro-logo-83188D1A17-seeklogo.com.png" alt="qro" id="qro">
        <h1 class="est">educacion del estado de queretaro</h1>
    </div>
    <br>
    </br>
    <div id="pres">
        <h1>
            bienvenido al sistema de docentes de la sep ingrese su curp.
        </h1>
        <br>
        </br>
    </div>
    <div id="cont2">
        <form id="curp1" method="post">
            <input type="text" name="curp" value="" placeholder="curp" class="inser">
        <br>
            <input type="submit" name="entrar" value="entrar" class="inser2" >

        </form>
    </div>
    <div id="mensajeError" style="display: none; color: red;">curp o contraseña incorrectos.
    </div>
</body>
</html>

<?php
include 'conexion.php';
?>

<?php
session_start();
include("conexion.php");
if(isset($_POST["entrar"])){
$btn=$_POST["entrar"];
if($btn=="entrar"){
}
$curp = $_POST["curp"];
 
$sql = "SELECT curp, nom1, nom2 FROM datos_generales WHERE curp = '$curp'";
$conn = mysqli_query($conn,$sql) or die("Algo salio mal");
 
$savecurp = "";
$savenombre1 = "";
$savenombre2 = "";
 
while($resultado = mysqli_fetch_array($conn)){
$savecurp = $resultado["curp"];
$savenombre1 = $resultado["nom1"];
$savenombre2 = $resultado["nom2"];
}
 
if($curp != $savecurp){
echo "<script>alert('curp no valida');</script>";
}
else{
$_SESSION["curp"] = $curp;
$_SESSION["nom1"] = $savenombre1;
$_SESSION["nom2"] = $savenombre2;

header("Location: menu.php");
}
}
?>

