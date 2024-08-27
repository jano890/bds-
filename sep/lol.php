<style>
.form-container {
        display: flex;
        justify-content: space-between;
        width: 100%;
    }
    .form-section {
        width: 48%; /* Cada sección ocupa aproximadamente la mitad del espacio disponible */
        padding: 20px;
        border: 1px solid #ccc;
        box-shadow: 2px 2px 10px #eee;
    }
    label {
        display: block;
        margin-top: 10px;
        margin-bottom: 5px;
    }
</style>
<link rel="stylesheet" href="diseño4.css">
<form method="POST">
    <div class="form-container">
        <div class="form-section">
            <fieldset>
                <legend>Información del Usuario</legend>
                <label for="username">Ingresa Nombre de usuario:</label>
                <input type="text" id="username" name="username" value="<?php echo $id;?>" />
                <label for="phone">Ingresa número telefónico:</label>
                <input type="text" id="phone" name="phone" value="<?php echo $estatus;?>" />
                <label for="password">Ingresa Password:</label>
                <input type="password" id="password" name="password" value="<?php echo $ap_paterno;?>" />
                <label for="repeatPassword">Repite Password:</label>
                <input type="password" id="repeatPassword" name="repeatPassword" value="<?php echo $ap_mat;?>" />
            </fieldset>
        </div>
        <div class="form-section">
            <fieldset>
                <legend>Datos Personales</legend>
                <label for="firstName">Primer Nombre:</label>
                <input type="text" id="firstName" name="firstName" value="<?php echo $nom;?>" />
                <label for="secondName">Segundo Nombre:</label>
                <input type="text" id="secondName" name="secondName" value="<?php echo $nom2;?>" />
                <label for="gender">Sexo:</label>
                <input type="text" id="gender" name="gender" value="<?php echo $sexo;?>" />
                <label for="birthdate">Fecha de Nacimiento:</label>
                <input type="text" id="birthdate" name="birthdate" value="<?php echo $fecha;?>" />
                <label for="curp">CURP:</label>
                <input type="text" id="curp" name="curp" value="<?php echo $curp;?>" />
            </fieldset>
        </div>
    </div>
    <button type="submit">Guardar Cambios</button>
</form>