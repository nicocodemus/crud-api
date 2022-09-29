<?=$cabecera ?>
 

 
 <h3 class="display-1 font-italic text-white text-center">usuarios</h3>
    <a href="<?=base_url('crearUsuario')?>" class="btn btn-success btn-block mt-3 mb-3"> <span class="font-weight-bold"><i class="fa-solid fa-user-plus"></i> crear usuario</span></a>

    <div class="d-flex flex-wrap justify-content-center">


            <?php foreach($usuarios as $usuario):?>

                <div class="card m-3 bg-dark" style="width:250px">
                    <div class="card-body">
                        <h4 class="card-title text-white"><?=$usuario['nombre']; ?></h4>
                        <p class="card-text text-white">usuarios id: <?=$usuario['id']; ?></p>
                        <p class="text-white"><i class="fa-solid fa-user"></i>  rol: <?=$usuario['rol']; ?></p>
                        <a href="<?=base_url('editarUsuario/'.$usuario['id']);?>" class="btn btn-success"><i class="fa-solid fa-user-pen"></i>  editar</a> 
                        <a href="<?=base_url('borrarUsuario/'.$usuario['id']);?>" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i>  borrar</a> 
                    </div>
                    
                </div>

            <?php endforeach; ?>
    </div>
 
    

    
<?=$piePagina?>