<?=$cabecera?>

    formulario crear 
    <?php //print_r(count($categorias)); ?>

  

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
                        <textarea name="texto" id="contenido" cols="30" rows="10" class="form-control"></textarea>
                        <!-- <input id="date" class="form-control" type="text" name="texto"> -->
                    </div>
                    

                    <!-- <div class="form-group">
                        <label for="date">categoria</label>
                        <input id="date" class="form-control" type="text" name="categoria_id">
                    </div> -->

                    <div class="form-group">
                        <label for="categoria">elegir categoria</label>
                        <select name="categoria_id" id="categoria" class="form-control">
                            <?php for ($i=0;$i < count($categorias);$i++):?>

                                <option value="<?=$categorias[$i]['id'] ?>"> <?=$categorias[$i]['nombre']?></option>
                            
                            <?php endfor; ?>


                         </select>
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