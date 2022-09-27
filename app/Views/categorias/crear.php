<?=$cabecera?>
    formulario crear categoria 

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ingresa el nuevo usuario</h5>
            <p class="card-text">

            <form action="<?=base_url('guardarCategoria');?>" method="post">


                    <div class="form-group">
                        <label for="date">nombre</label>
                        <input id="date" class="form-control" type="text" name="nombre">
                    </div>                    

                    <button class="btn btn-success" type="submit">guardar</button>
                    <a href="<?=base_url('listarCategorias'); ?>" class="btn btn-info">cancelar</a>


            </form>

            </p>
        </div>
    </div>

    
<?=$piePagina ?>