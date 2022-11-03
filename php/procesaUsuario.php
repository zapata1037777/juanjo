<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
    <link href="styles.css" type="text/css" rel="stylesheet" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
</head>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<body>
    
        <?php



            include("menu.php"); 
            
        
         $nombreUsuarioSolicitado = $_POST['nombreusuariosolicitado'];
         $mailUsuarioSolicitado= $_POST['Maiusuariosolicitado'];
            $documentoUsuarioSolicitado=  $_POST['Ndocumento'];
            $passwordUsuarioSolicitado= $_POST['Contrausuariosolicitado'];


            if(!$nombreUsuarioSolicitado || !$mailUsuarioSolicitado
            || !$documentoUsuarioSolicitado || !$passwordUsuarioSolicitado){
            echo "Ha faltado algun campo";
            };

            if(!is_numeric($documentoUsuarioSolicitado)){

            echo "solo se aceptan números en el campo documento";
                
            }
         
      
        
       

            $con=mysqli_connect('localhost', 'root','', 'requisitosjue');
            $sql="INSERT INTO `usuariosRegistrados` VALUES ('$nombreUsuarioSolicitado', '$mailUsuarioSolicitado', '$documentoUsuarioSolicitado', '$passwordUsuarioSolicitado')";
            $resultado=mysqli_query($con, $sql);
            mysqli_close($con);
       

        ?>
    
</body>
</html>