<?=$cabecera?>
    formulario editar

    <?php print_r($noticia); ?>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">editar la noticia #<?=$noticia['id'] ?></h5>
            <p class="card-text">

            <form action="<?=base_url('actualizar');?>" method="post">

                    <input type="hidden" name="id" value="<?=$noticia['id'] ?>">


                    <div class="form-group">
                        <label for="date"></label>
                        <input id="date" class="form-control" type="date" name="fecha_noticia" value="<?=$noticia['fecha_noticia'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="date">titular</label>
                        <input id="date" class="form-control" type="text" name="titular" value="<?=$noticia['titular'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="date">contenido</label>
                        <input id="date" class="form-control" type="text" name="texto" value="<?=$noticia['texto'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="date">categoria</label>
                        <input id="date" class="form-control" type="text" name="categoria_id" value="<?=$noticia['categoria_id'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="date">slug</label>
                        <input id="date" class="form-control" type="text" name="slug" value="<?=$noticia['slug'] ?>">
                    </div>

                    <button class="btn btn-success" type="submit">actualizar</button>
                    <a href="<?=base_url('listar'); ?>" class="btn btn-info">cancelar</a>


            </form>

            </p>
        </div>
    </div>
 <?=$piePagina?>