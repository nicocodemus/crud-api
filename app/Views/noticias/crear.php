<?=$cabecera?>
    formulario crear 

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ingresa la nueva noticia</h5>
            <p class="card-text">

            <form action="<?=base_url('guardar');?>" method="post">


                    <div class="form-group">
                        <label for="date">fecha</label>
                        <input id="date" class="form-control" type="date" name="fecha_noticia">
                    </div>

                    <div class="form-group">
                        <label for="date">titular</label>
                        <input id="date" class="form-control" type="text" name="titular">
                    </div>

                    <div class="form-group">
                        <label for="date">contenido</label>
                        <input id="date" class="form-control" type="text" name="texto">
                    </div>

                    <div class="form-group">
                        <label for="date">categoria</label>
                        <input id="date" class="form-control" type="text" name="categoria_id">
                    </div>

                    <div class="form-group">
                        <label for="date">slug</label>
                        <input id="date" class="form-control" type="text" name="slug">
                    </div>

                    <button class="btn btn-success" type="submit">guardar</button>
                    <a href="<?=base_url('listar'); ?>" class="btn btn-info">cancelar</a>


            </form>

            </p>
        </div>
    </div>

    
<?=$piePagina ?>