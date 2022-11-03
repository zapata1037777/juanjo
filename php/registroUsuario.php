<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
    <link href="styles.css" type="text/css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body class="body"> 
<center>
<script src="menu.js"></script>

<form class="" onsubmit="return vali()">
<div class="container">
    <?php
    include("menu.php");
    ?>
    <div class="container_form">
    <form   action="procesaUsuario.php" method="post"  class="" onsubmit="return vali()">

        <h2>Registro de usuario</h2>

        <label class="form-label" for="nombreusuariosolicitado"> Nombre del usuario</label>
        <input class="form-control" type="text" name="nombreusuariosolicitado" id="nombreusuariosolicitado" >

        <label class="form-label" for="Maiusuariosolicitado"> Mail de usuario</label>
        <input class="form-control" type="mail" name="Maiusuariosolicitado" id="Maiusuariosolicitado">
        
        <label class="form-label" for="Ndocumento"> Numero de documento de usuario</label>
        <input class="form-control" type="text" name="Ndocumento" id="Ndocumento">
        
        <label class="form-label" for="Contrausuariosolicitado"> Contraseña de usuario</label>
        <input class="form-control" type="text" name="Contrausuariosolicitado" id="Contrausuariosolicitado">
        
        <input type="submit" value="Enviar" class="form-control"  class="btn_en"/>
    </form>
    </div>

    </div>
    </center>
</body>
</html>