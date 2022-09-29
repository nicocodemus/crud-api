<?=$cabecera ?>


 <h3 class="display-1 font-italic text-white text-center">noticias</h3>
    <a href="<?=base_url('crear')?>" class="btn btn-success btn-block mt-3 mb-3"> <span class="font-weight-bold"><i class="fa-solid fa-file-circle-plus"></i> crear noticia</span></a>

    <div class="d-flex flex-wrap justify-content-center">


            <?php foreach($noticias as $noticia):?>

                <div class="card m-3 bg-dark" style="width:250px">
                    <div class="card-body">
                        <h4 class="card-title text-white"><?=$noticia['titular']; ?></h4>
                        <p class="card-text text-white">noticia id: <?=$noticia['id']; ?></p>
                        <p class="card-text text-white">categoria id: <?=$noticia['categoria_id']; ?></p>
                        <p class="text-white"><i class="fa-solid fa-calendar-days"></i>    <?=$noticia['fecha_noticia']; ?></p>
                        <a href="#id<?=$noticia['id']; ?>" class="btn btn-info mb-3 mr-5" data-toggle="collapse">contenido <i class="fa-solid fa-caret-down ml-3"></i></a>
                        <div id="id<?=$noticia['id']; ?>" class="collapse text-white mb-3" style="max-height:300px;overflow-y:scroll">
                        <?=$noticia['texto']; ?>
                        
                        </div>
                        <a href="<?=base_url('editar/'.$noticia['id']);?>" class="btn btn-success"><i class="fa-solid fa-file-pen"></i>  editar</a> 
                        <a href="<?=base_url('borrar/'.$noticia['id']);?>" class="btn btn-danger"><i class="fa-solid fa-file-circle-minus"></i>  borrar</a> 
                    </div>
                    
                </div>

            <?php endforeach; ?>
    </div>   
    
    

    
<?=$piePagina?>