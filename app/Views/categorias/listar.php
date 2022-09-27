<?=$cabecera ?>
    lista de categorias
 <!-- <?php print_r($categorias)?> -->

 

 
   
    <a href="<?=base_url('crearCategoria')?>" class="btn btn-success">crear categoria</a>
       <table class="table table-dark">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>nombre</th>
                <th>acciones</th>
                
            </tr>
        </thead>
        <tbody>

        <?php foreach($categorias as $categoria):?>

            <tr>
                <td><?=$categoria['id']; ?></td>
                <td><?=$categoria['nombre']; ?></td>                
                <td>
                    <a href="<?=base_url('editarCategoria/'.$categoria['id']);?>" class="btn btn-info" type="button">editar</a>
                    <a href="<?=base_url('borrarCategoria/'.$categoria['id']);?>" class="btn btn-danger" type="button">borrar</a>
                </td>
            </tr>

        <?php endforeach; ?>
        </tbody>
       </table>
    

    
<?=$piePagina?>