<?=$cabecera ?>

<div class="container p-5">
  <h2 class="text-white"><?=$categoria['nombre']?></h2>
  
  <ul class="list-group ">

  <?php if(!$noticias==[]):?>
    
  
    <?php foreach($noticias as $noticia):?>

        <a href="<?=base_url('noticia/'.$noticia['slug'])?>"class="list-group-item list-group-item-action d-flex justify-content-between align-items-center list-group-item-dark"">
        
      <?=$noticia['titular']?>      
        
    </a>

    <?php endforeach; ?>

    <?php else:?>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>informacion! </strong>aun no hay noticias en esta categoria
        </div>

    <?php endif;?>
    

    
  </ul>
</div>

<?=$piePagina ?>