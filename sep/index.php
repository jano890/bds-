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
    <div id="pres">
        <h1>
            bienvenido ingrese su tipo de usuarios por favor.
        </h1>
    </div>
    <br>
    </br>

    <link rel="stylesheet" href="diseño1.css">
<div id="cont2">
        <form id="curp1" method="post">
            <select name="tipousu" placeholder="tipo usuario" class="">
            <option value="maestro">maestro</option>
            <option value="administrador">administrador</option>
    </select>
            <br>
        </br>
            <input type="submit" name="entrar" value="entrar" class="inser2" >

        </form>
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
$usu=$_POST["tipousu"];

if($usu == "maestro"){            
header("Location: login2.php");
 exit();
}
elseif($usu == "administrador"){
    header("Location: login.php");
     exit();
    } else {
        echo "<script>alert('tipo de usuario no valido');</script>";
    }
}
