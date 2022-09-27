<?=$cabecera?>
    editar usuario

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ingresa la nueva usuario</h5>
            <p class="card-text">

            <form action="<?=base_url('actualizarUsuario');?>" method="post">

            <input type="hidden" name="id" value="<?=$usuario['id']?>">


                    <div class="form-group">
                        <label for="nombre">nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" value="<?=$usuario['nombre']?>">
                    </div>  
                    
                    <div class="form-group">
                        <label for="clave">contraseña</label>
                        <input id="clave" class="form-control" type="password" name="clave">
                    </div>

                    <button class="btn btn-success" type="submit">guardar</button>
                    <a href="<?=base_url('listarUsuarios'); ?>" class="btn btn-info">cancelar</a>


            </form>

            </p>
        </div>
    </div>

    
<?=$piePagina ?>