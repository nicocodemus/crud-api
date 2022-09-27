<?=$cabecera?>
    formulario crear Usuario 

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ingresa el nuevo Usuario</h5>
            <p class="card-text">

            <form action="<?=base_url('guardarUsuario');?>" method="post">


                    <div class="form-group">
                        <label for="nombre">nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="clave">contraseña</label>
                        <input id="clave" class="form-control" type="password" name="clave">
                    </div>
                    <div class="form-group">
                        <label for="rol">elegir rol</label>
                        <select name="rol" id="rol">
                            <option value="user" >usuario</option>
                          <?php if(session('rol')=='admin'):?> <option value="admin" >administrador</option><?php endif;?>
                        </select>
                    </div>                    

                    <button class="btn btn-success" type="submit">guardar</button>
                    <a href="<?=base_url('listarUsuarios'); ?>" class="btn btn-info">cancelar</a>


            </form>

            </p>
        </div>
    </div>

    
<?=$piePagina ?>