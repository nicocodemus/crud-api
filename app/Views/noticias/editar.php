<?=$cabecera?>
    

    <?php /*print_r($noticia); */if(session('rol')=='admin'):?>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">editar la noticia : <?=$noticia['titular'] ?></h5>
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
                            <label for="texto">contenido</label>
                            <textarea name="texto" id="contenido" cols="30" rows="10" class="form-control"><?=$noticia['texto'] ?>"</textarea>
                            
                        </div>
                        

                        <div class="form-group">
                        <label for="categoria"> categoria</label>
                        <select name="categoria_id" id=""class="form-control">
                            <?php for ($i=0;$i < count($categorias);$i++):?>

                                <option value="<?=$categorias[$i]['id'] ?>"> <?=$categorias[$i]['nombre']?></option>
                            
                            <?php endfor; ?>


                        </select>
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

    <?php else:?>  
        
        <div class="alert alert-danger" role="alert">
            <p>no tines acceso a esta pagina</p>
        </div>
    <?php endif;?>

 <?=$piePagina?>