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
            echo form_button(array('name'=>'editar','type'=>'submit','class'=>'btn btn-warning','content'=>'<i class="fa fa-pencil-square-o"></i>'));
            echo form_button(array('name'=>'borrar','type'=>'submit','class'=>'btn btn-danger','content'=>'<i class="fa fa-trash"></i>'));
            echo "</td>";
            echo "</tr>";
        }
        ?>
        </table>
    </div>
</div>
</body>
</html>
