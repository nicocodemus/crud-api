<?=$cabecera ?>
    lista de libros
 <!-- <?php /*print_r($noticias)*/?> -->

 

 
   
    <a href="<?=base_url('crear')?>" class="btn btn-success">crear noticia</a>
       <table class="table table-dark">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>fecha</th>
                <th>titular</th>
                <th>contenido</th>
                <th>categoria</th>
                <th>slug</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($noticias as $noticia):?>

            <tr>
                <td><?=$noticia['id']; ?></td>
                <td><?=$noticia['fecha_noticia']; ?></td>
                <td><?=$noticia['titular']; ?></td>
                <td><?=$noticia['texto']; ?></td>
                <td><?=$noticia['categoria_id']; ?></td>
                <td><?=$noticia['slug'];?></td>
                <td>
                    <a href="<?=base_url('editar/'.$noticia['id']);?>" class="btn btn-info" type="button">editar</a>
                    <a href="<?=base_url('borrar/'.$noticia['id']);?>" class="btn btn-danger" type="button">borrar</a>
                </td>
            </tr>

        <?php endforeach; ?>
        </tbody>
       </table>
    

    
<?=$piePagina?>