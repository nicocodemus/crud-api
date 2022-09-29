<?=$cabecera?>
 

    <?php if(session('rol')=='admin'):?>

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

                            <div class="form-group">
                                <p>el rol actual  es de
                                    <?php if($usuario['rol']=='user'):?>
                                        <span>usuario</span>
                                    <?php else:?>
                                        <span>administrador</span>
                                    <?php endif;?>
                                </p>
                                
                            </div>

                            <div class="form-group">
                                <label for="rol">cambiar rol</label>
                                <select name="rol" id="rol"class="form-control">
                                    <option value="user" >usuario</option>
                                    <option value="admin" >administrador</option>
                                </select>
                            </div>

                            <button class="btn btn-success" type="submit">guardar</button>
                            <a href="<?=base_url('listarUsuarios'); ?>" class="btn btn-info">cancelar</a>


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