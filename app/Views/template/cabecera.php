<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba Kodeo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4f796de792.js" crossorigin="anonymous"></script>

    <style>
      *{
        text-transform: capitalize;
        box-sizing: border-box;
      }
      #mainContainer{
        min-height: 90vh;
      }
    </style>
</head>
<body class="bg-secondary">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
  <a class="navbar-brand" href="<?=base_url('tiempo') ?>"><i class="nav-link fa-solid fa-sun fa-spin"style="--fa-animation-duration: 10s;"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto justify-content-center">
      <li class="nav-item">
        <a href="<?=base_url('admin') ?>" class="nav-link active "><?=session('nombre');?></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?=base_url('salir') ?>">salir <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('noticias') ?>">noticias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('noticia/categoria') ?>">categorias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('tiempo') ?>">tiempo</a>
      </li>
      <?php if(!session('rol')):?>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('loginA') ?>">ingresa</a>
      </li>
      <?php endif;?>
      <?php if(session('rol')=='admin'):?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            opciones de administrador
          </a>
          <div class="dropdown-menu ">
            <a class="dropdown-item" href="<?=base_url('listar') ?>">noticias</a>
            <a class="dropdown-item" href="<?=base_url('listarCategorias') ?>">categorias</a>
            <a class="dropdown-item" href="<?=base_url('listarUsuarios') ?>">usuario</a>
          </div>
        </li>
      </li>
      <?php endif;?>
      
      
    </ul>
   
  </div>
</nav>

    <div class="container bg-secondary p-3"id="mainContainer">
    <?php if(session('mensaje')):?>

        <div class="alert alert-info alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>informacion! </strong><?=session('mensaje');?>
        </div>

    <?php endif;?>