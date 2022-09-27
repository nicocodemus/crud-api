<?=$cabecera?>
    editar categoria
    <?php if(session('rol')=='admin'):?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ingresa la nueva categoria</h5>
                <p class="card-text">

                <form action="<?=base_url('actualizarCategoria');?>" method="post">

                <input type="hidden" name="id" value="<?=$categoria['id']?>">


                        <div class="form-group">
                            <label for="date">nombre</label>
                            <input id="date" class="form-control" type="text" name="nombre" value="<?=$categoria['nombre']?>">
                        </div>                    

                        <button class="btn btn-success" type="submit">guardar</button>
                        <a href="<?=base_url('listarCategorias'); ?>" class="btn btn-info">cancelar</a>


                </form>

                </p>
            </div>
        </div>

    <?php else:?>  
        
        <div class="alert alert-danger" role="alert">
            <p>no tines acceso a esta pagina</p>
        </div>
    <?php endif;?>

    
<?=$piePagina ?>