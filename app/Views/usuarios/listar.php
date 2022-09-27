<?=$cabecera ?>
    lista de Usuarios
 <!-- <?php/* print_r($Usuarios)*/?> -->

 

 
   
    <a href="<?=base_url('crearUsuario')?>" class="btn btn-success">crear Usuario</a>
       <table class="table table-dark">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>nombre</th>
                <th>rol</th>                
                <th>acciones</th>
                
            </tr>
        </thead>
        <tbody>

        <?php foreach($usuarios as $usuario):?>

            <tr>
                <td><?=$usuario['id']; ?></td>
                <td><?=$usuario['nombre']; ?></td>
                <td><?=$usuario['rol']; ?></td>                  
                <td>
                    <a href="<?=base_url('editarUsuario/'.$usuario['id']);?>" class="btn btn-info" type="button">editar</a>
                    <a href="<?=base_url('borrarUsuario/'.$usuario['id']);?>" class="btn btn-danger" type="button">borrar</a>
                </td>
            </tr>

        <?php endforeach; ?>
        </tbody>
       </table>
    

    
<?=$piePagina?>