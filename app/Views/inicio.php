<?=$cabecera ?>


<div class="d-flex flex-wrap justify-content-center">


            <?php for($i=0;$i<5;$i++):?>

                <div class="card m-3 bg-dark" style="width:250px">
                    <div class="card-body">
                        <a href="<?=base_url('noticia/'.$noticias[$i]['slug']); ?>"><h4 class="card-title text-white"><?=$noticias[$i]['titular']; ?></h4></a>                      
                        <p class="text-white"><i class="fa-solid fa-calendar-days"></i>    <?=$noticias[$i]['fecha_noticia']; ?></p>
                        <a href="#id<?=$noticias[$i]['id']; ?>" class="btn btn-info mb-3 mr-5" data-toggle="collapse">contenido <i class="fa-solid fa-caret-down ml-3"></i></a>
                        <div id="id<?=$noticias[$i]['id']; ?>" class="collapse text-white mb-3" style="max-height:300px;overflow-y:scroll">
                        <?=$noticias[$i]['texto']; ?>
                        
                        </div>
                        
                    </div>
                    
                </div>

            <?php endfor; ?>
    </div>
<?=$piePagina ?>