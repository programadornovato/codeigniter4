<body>
<div class="container">
    <div class="row">
        <a href="<?php echo base_url(); ?>home/formulario" class="btn btn-info" role="button" >Nuevo</a>
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
        foreach($users as $user){
            echo "<tr  scope='row' >";
            echo "<td>".$user['id']."</td>";
            echo "<td>".$user['name']."</td>";
            echo "<td>".$user['email']."</td>";
            echo "<td>".$user['deleted']."</td>";
            echo "<td>";
            ?>
            <a href="<?php echo base_url(); ?>home/editar?id=<?php echo $user['id']; ?>" class="btn btn-warning" role="button" ><i class="fa fa-pencil-square-o"></i></a>
            <a href="<?php echo base_url(); ?>home/borrar?id=<?php echo $user['id']; ?>" class="btn btn-danger" role="button" ><i class="fa fa-trash"></i></a>
            <?php
            echo "</td>";
            echo "</tr>";
        }
        ?>
        </table>
    </div>
</div>
</body>
</html>
