<div class="container">
<?php
echo form_open('/Micontrolador/guarda');
if(isset($users)){
    $name=$users[0]['name'];
    $email=$users[0]['email'];
}
else{
    $name="";
    $email="";
}
?>
<div class="form-group">
<?php
echo form_label('Nombre','name');
echo form_input(array('name'=>'name','placeholder'=>'Nombre','class'=>'form-control','value'=>$name));
echo "<br>";
echo form_label('Email','email');
echo form_input(array('name'=>'email','placeholder'=>'Email','class'=>'form-control','value'=>$email));
echo "<br>";
echo form_submit('guarda','Guardar','class="btn btn-primary"');
if(isset($users)){
    echo form_hidden('id',$users[0]['id']);
}

?>
</div>
<?php

echo form_close();
?>
</div>