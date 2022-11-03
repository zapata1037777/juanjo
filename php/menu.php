<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="styles.css" type="text/css" rel="stylesheet"/>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->

</head>
<body>
<script src="local.js"></script>

<form class="" onsubmit="return vali()">

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ENDO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gestion de Usuario
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="registroUsuario.php">Registrar usuario</a></li>
            <li><a class="dropdown-item" href="consultaUsuario.php">consultar usuario</a></li>
            <li><a class="dropdown-item" href="consultarUsuarioespecifico.php">consultar usuario especifico</a></li>
            <li><a class="dropdown-item" href="eliminarusuariogeneral.php">Eliminar usuario</a></li>
            <li><a class="dropdown-item" href="eliminarusuarioespecifico.php">eliminar usuario especifico</a></li>
            <li><a class="dropdown-item" href="modificarusuario.php">modificar usuario</a></li>
            
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Login</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

</form>

</body>
</html>