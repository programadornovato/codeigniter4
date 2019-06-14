<div class="container">
<?php
echo form_open('/home/guarda');
?>
<div class="form-group">
<?php
echo form_label('Nombre','name');
echo form_input(array('name'=>'name','placeholder'=>'Nombre','class'=>'form-control'));
echo "<br>";
echo form_label('Email','email');
echo form_input(array('name'=>'email','placeholder'=>'Email','class'=>'form-control'));
echo "<br>";
echo form_submit('guarda','Guardar','class="btn btn-primary"');
?>
</div>
<?php

echo form_close();
?>
</div>