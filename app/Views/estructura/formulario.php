<?php
echo form_open('/home/guarda');
echo form_label('Nombre','name');
echo form_input(array('name'=>'name','placeholder'=>'Nombre'));
echo "<br>";
echo form_label('Email','email');
echo form_input(array('name'=>'email','placeholder'=>'Email'));
echo "<br>";
echo form_submit('guarda','Guardar');

echo form_close();
?>