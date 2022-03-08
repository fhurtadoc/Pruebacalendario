<?php include_once('config/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once("./src/views/includes/headers.php"); ?>
    <link rel="stylesheet" href=<?php echo _DOMAIN."src/views/css/home.css";?>>
    <title>Ingresar</title>
</head>
<body>
    <div class="continer">
        <form >
            <div class="card-login"> <p>Si ya estas registrado ingresa </p>
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" id="usua_login">
                </div>
                <div class="form-group">
                    <label for="pass">Contraseña</label>
                    <input type="text" name="pass" id="pass_login"> 
                </div>
                <button class="btn btn-primary" onclick="login()" >Ingresar</button>                        
            </div>
            <div class="card_singup">

            <div class="form-group"><br>
            <p>Si aun no estas registrado llena estos datos </p>
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usua_singup">
            </div>
            <div class="form-group">                
                <label for="pass">Escribe una contraseña</label>
                <input type="text" name="pass" id="pass_singup">                        
            </div>
                <a href="#"  class="btn btn-info" onclick="singUp()">Registrar</a>
            </div>
        </form>        
    </div>
</div>    
</body>
<script src="../../../src/views/js/login.js"></script>
</html>


