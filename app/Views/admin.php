<?=$cabecera?>

<div class="container p-5">
  <h2 class="text-white">disponible para editar</h2>
  <p class="text-white">acceda a los parametros que necesite editar</p>
  <ul class="list-group ">
    <a href="<?=base_url('listar')?>"class="list-group-item list-group-item-action d-flex justify-content-between align-items-center list-group-item-dark"">
        
      noticias
      <span class="badge badge-primary badge-pill"><?=count($noticias);?></span>
        
    </a>
    <a href="<?=base_url('listarCategorias')?>"class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
        
      categorias
      <span class="badge badge-primary badge-pill"><?=count($categorias);?></span>
        
    </a>
    <a href="<?=base_url('listarUsuarios')?>"class="list-group-item list-group-item-action d-flex justify-content-between align-items-center list-group-item-dark">
        
      usuarios
      <span class="badge badge-primary badge-pill"><?=count($usuarios);?></span>
        
    </a>
  </ul>
</div>

<?=$piePagina?>