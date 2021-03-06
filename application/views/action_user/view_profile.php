 <?php  
 	session_start();
	 if(empty($_SESSION['info_user']))
	 {
	
		redirect(base_url());
	 }
plantilla_usuarios::iniciar($categorias); 
$input_nombre = array(
	'type'  	 => 	'text',
	'name'  	 => 	'nombre',
	'id'    	 => 	'nombre',
	'maxlength'  => 	'60',
	'size'  	 => 	'100',
	'class' => 'form-control'
);
$input_apellido = array(
	'type'  	 => 	'text',
	'name'  	 => 	'apellido',
	'id'    	 => 	'apellido',
	'maxlength'  => 	'60',
	'size'  	 => 	'100',
	'class' => 'form-control'
);
$input_correo = array(
	'type'  	 => 	'email',
	'name'  	 => 	'correo',
	'id'    	 => 	'correo',
	'maxlength'  => 	'60',
	'size'  	 => 	'100',
	'class' => 'form-control'
);
$input_contrasenia = array(
	'type'  	 => 	'password',
	'name'  	 => 	'contrasenia',
	'id'    	 => 	'contrasenia',
	'maxlength'  => 	'60',
	'size'  	 => 	'100',
	'class' => 'form-control'
);
$input_username = array(
	'type'  	 => 	'text',
	'name'  	 => 	'username',
	'id'    	 => 	'username',
	'maxlength'  => 	'60',
	'size'  	 => 	'100',
	'class' => 'form-control'
);

$submit = array(
	'class' => 'btn btn-login float-right',

	'id'=>		'Successbtn',
	'name'=>'btn_guardar',
	'value' => 'Guardar'
);


?>


<!-- Register NUEVO -->


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>




<section class="login-block">
	<div class="container">
		<div class="wrapable">
			<div class="col-md-6 login-sec">
				<h2 class="text-center">Edita tus datos</h2>

				<?php echo form_open();?>
				<br>
				<?php echo form_label('Nombre');?>
				<br>
				<?php echo form_input($input_nombre);?>
				<br>
				<?php echo form_error('nombre') ?>
				<br>

				<?php echo form_label('Apellido');?>
				<br>
				<?php echo form_input($input_apellido);?>
				<br>
				<?php echo form_error('apellido') ?>
				<br>

				<?php echo form_label('Correo Electronico');?>
				<br>
				<?php echo form_input($input_correo);?>
				<br>
				<?php echo form_error('correo') ?>
				<br>

				<?php echo form_label('Contraseña');?>
				<br>
				<?php echo form_input($input_contrasenia);?>
				<br>
				<?php echo form_error('contrasenia') ?>
				<br>

				<?php echo form_label('Nombre de usuario');?>
				<br>
				<?php echo form_input($input_username);?>
				<br>
				<?php echo form_error('username') ?>
				<br>

				<?php echo form_submit($submit);?>


				<?php echo form_close();?>


			
			</div>

			

		</div>
</section>

<style>
	@import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
	.login-block {
		background: #DE6262;
		/* fallback for old browsers */
		background: -webkit-linear-gradient(to bottom, #f8f9fa, #dee2e6);
		/* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to bottom, #f8f9fa, #dee2e6);
		/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		float: left;
		width: 100%;
		padding: 50px 0;
	}

	.banner-sec {
		height: 500px;
		background-size: cover;
		min-height: 500px;
		border-radius: 0 10px 10px 0;
		padding: 0;
	}

	.container {
		background: #fff;
		border-radius: 10px;
		box-shadow: 15px 20px 0px rgba(0, 0, 0, 0.1);
	}



	.login-sec {
		padding: 50px 30px;
		position: relative;
	}

	.login-sec .copy-text {
		position: absolute;
		width: 80%;
		bottom: 20px;
		font-size: 13px;
		text-align: center;
	}

	.login-sec .copy-text i {
		color: #FEB58A;
	}

	.login-sec .copy-text a {
		color: #E36262;
	}

	.login-sec h2 {
		margin-bottom: 30px;
		font-weight: 800;
		font-size: 30px;
		color: #DE6262;
	}

	.login-sec h2:after {
		content: " ";
		width: 100px;
		height: 5px;
		background: #FEB58A;
		display: block;
		margin-top: 20px;
		border-radius: 3px;
		margin-left: auto;
		margin-right: auto
	}

	.btn-login {
		background: #DE6262;
		color: #fff;
		font-weight: 600;
	}


	section {
		margin-bottom: 20px;
	}

	button[type="submit"] {
		margin-top: 10px;
	}

	.registrarme,
	.forgot {
		text-align: left;
	}
	p{
		color: red;
		font-size: 15px;
	}
	.registrarme a,
	.forgot a {
		font-size: 20px;
	}

	.wrapable {
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		justify-content: center;
		flex-direction: row;
		flex-wrap: wrap;
		width: 100%;
		margin-bottom: 30px;
	}

	.container {
		padding: 0;
	}

	
	


</style>

