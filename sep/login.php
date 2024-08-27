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
            bienvenido al sistema de administrador ingrese su usuario.
        </h1>
        <br>
        </br>
    </div>
    <div id="cont2">
        <form id="curp1" method="post">
            <input type="text" name="usu" value="" placeholder="usuario" class="inser">
        <br>
        </br>
            <input type="text" name="contraseña" value="" placeholder="contraseña" class="inser">
        <br>
        </br>
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
if(isset($_POST["entrar"])){
$btn=$_POST["entrar"];
if($btn=="entrar"){
}
$usu=$_POST["usu"];
$pass=$_POST["contraseña"];

$sql="SELECT usuario, contraseña FROM usuarios WHERE usuario='$usu'";
$cs=mysqli_query($conn, $sql)or die ("algo salio mal");
$res=mysqli_fetch_array($cs);

if($res && $pass == $res[1]){
            
header("Location: adminop.php");
 exit();
} else {
    echo "<script>alert('usuario no valido');</script>";
}
}
