<?=$cabecera?>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title h3">ingresa</h5>
            <p class="card-text">

            <form action="<?=base_url('loginLecture');?>" method="post">


                    <div class="form-group">
                        <label for="nombre">nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="clave">contraseña</label>
                        <input id="clave" class="form-control" type="password" name="clave">
                    </div>                     

                    <button class="btn btn-success" type="submit">entrar</button>
                    


            </form>

            </p>
        </div>
    </div>

    
<?=$piePagina ?>