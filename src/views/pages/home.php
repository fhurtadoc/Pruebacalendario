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
        <div class="card-login">
            <label for="usuario">Ingresa</label>
            <input type="text" name="usuario" id="usua_login">
            <label for="pass"></label>
            <input type="text" name="pass" id="pass_login"> 
            <button  onclick="login()" >Ingresar</button>                        
        </div>
        <div class="card_singup">
            <label for="usuario">Registrate</label>
            <input type="text" name="usuario" id="usua_singup">
            <label for="pass"></label>
            <input type="text" name="pass" id="pass_singup">                        
            <a href="#" onclick="singUp()">Registrar</a>
        </div>
    </div>
</div>    
</body>
<script src="../../../src/views/js/login.js"></script>
</html>


