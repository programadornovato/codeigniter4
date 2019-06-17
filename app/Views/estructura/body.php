<?php
//echo $cabecera;
//echo view('estructura/header');
?>
<?= $cabecera; ?>
<body>
<div class="container">
    <div class="row">
        <a href="<?php echo base_url(); ?>nuevo" class="btn btn-info" role="button" >Nuevo</a>
    </div>
    <div class="row">

    
        <table  class="table">
        <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">deleted</th>
        <th scope="col">acciones</th>
        </tr>
        <?php
        ?>
        <? if($users): ?>
            <?php foreach ($users as $user): ?>
            <?= "<tr  scope='row' >";?>
            <?= "<td>".$user['id']."</td>";?>
            <?= "<td>".$user['name']."</td>";?>
            <?= "<td>".$user['email']."</td>";?>
            <?= "<td>".$user['deleted']."</td>";?>
            <td>
            <a href="<?php echo base_url(); ?>micontrolador/editar/<?php echo $user['id']; ?>" class="btn btn-warning" role="button" ><i class="fa fa-pencil-square-o"></i></a>
            <a href="<?php echo base_url(); ?>micontrolador/borrar/<?php echo $user['id']; ?>" class="btn btn-danger" role="button" ><i class="fa fa-trash"></i></a>
            </td>
            <?php endforeach; ?>
        <? endif; ?>
        </table>
    </div>
</div>
</body>
</html>
