<?php  plantilla::iniciar();
$input_nombre = array(
	'type'  	 => 	'text',
	'name'  	 => 	'nombre',
	'id'    	 => 	'nombre',
	'maxlength'  => 	'60',
	'size'  	 => 	'100',
	'value'		=> 		set_value('nombre' , @$datos_categorias[0]->nombre),
	'class'   => 'input'

//	'value'		 =>		set_value('con_email',@$datos_contactos[0]->con_email)
);
$submit = array(
	'class' => 'btn btn-dark',
	'value' => 'Guardar'
);

$this->load->model('M_categoria');

if(empty($datos_contactos[0]->id)){
	$input_idcategoria = array(
		'type'  	 => 	'text',
		'name'  	 => 	'idcategoria',
		'id'    	 => 	'idcategoria',
		'maxlength'  => 	'60',
		'size'  	 => 	'100',
		'value'		=> 		set_value('idcategoria',  @$datos_categorias[0]->idcategoria ),
		'class' => 'input'
	//	'value'		 =>		set_value('con_email',@$datos_contactos[0]->con_email)
	);
}else{
	$input_idcategoria = array(
		'type'  	 => 	'text',
		'name'  	 => 	'idcategoria',
		'id'    	 => 	'idcategoria',
		'maxlength'  => 	'60',
		'size'  	 => 	'100',
		'value'		=> 		set_value('idcategoria',  @$datos_contactos[0]->id ),
		'class' => 'input'
	//	'value'		 =>		set_value('con_email',@$datos_contactos[0]->con_email)
	);
}

?>
  <div class="content-wrapper">
<div class="content-div">

		<h1>Nueva Subcategoría</h1>

<?php echo form_open();?><br>

<?php echo form_label('Nombre');?><br>
<?php echo form_input($input_nombre);?><br>
<?php echo form_error('nombre') ?><br>
<?php echo form_label('IdCategoria');?><br>
<?php echo form_input($input_idcategoria);?><br>
<?php echo form_error('IdCategoria') ?><br>
<?php echo form_submit($submit);?><br>
<?php echo form_close();?>
</div>
</div>


<style>
	h1{
		text-align: center;
	}
	.content-div{
		width: 60%;
		margin: 20%;
		border: 1px solid rgb(206, 206, 206);
		padding: 20px;
		border-radius: 5px;
	}
	.input{
		width: 100%;
		border: 1px solid rgba(27, 129, 197, 0.904);
		border-radius: 4px;
	}
	.btn-dark{
		float: right;
	}
	
</style>