<?=$cabecera ?>

 <!-- <?php// print_r($categorias)?> -->

 

 
    <h3 class="display-1 font-italic text-white text-center">categorias</h3>
    <a href="<?=base_url('crearCategoria')?>" class="btn btn-success btn-block mt-3 mb-3"> <span class="font-weight-bold"><i class="fa-solid fa-plus"></i> crear categoria</span></a>

    <div class="d-flex flex-wrap justify-content-center">


            <?php foreach($categorias as $categoria):?>

                <div class="card m-3 bg-dark" style="width:230px">
                    <div class="card-body">
                        <h4 class="card-title text-white"><?=$categoria['nombre']; ?></h4>
                        <p class="card-text text-white">categoria id: <?=$categoria['id']; ?></p>
                        <a href="<?=base_url('editarCategoria/'.$categoria['id']);?>" class="btn btn-success"><i class="fa-solid fa-pen"></i>  editar</a> 
                        <a href="<?=base_url('borrarCategoria/'.$categoria['id']);?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>  borrar</a> 
                    </div>
                    
                </div>

            <?php endforeach; ?>
    </div>

    

    
<?=$piePagina?>