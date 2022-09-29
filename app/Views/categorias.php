<?=$cabecera?>
<div class="container p-5">
  <h2 class="text-white">leer por categoria</h2>
  
  <ul class="list-group ">
    <?php foreach($categorias as $categoria):?>

        <a href="<?=base_url('noticia/categoria/'.$categoria['nombre']);?>"class="list-group-item list-group-item-action d-flex justify-content-between align-items-center list-group-item-dark"">
        
      <?=$categoria['nombre']?>
      
        
    </a>

    <?php endforeach; ?>
    
  </ul>
</div>

<?=$piePagina?>