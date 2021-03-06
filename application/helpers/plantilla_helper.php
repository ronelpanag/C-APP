<?php

	class plantilla
	{
			static $instancia = null;
			static function iniciar()
			{
				self::$instancia=new plantilla();
			}
			function __construct(){
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Panel Administrador - C-APP</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('/extra/panel/');?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('/extra/panel/');?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url('/extra/panel/');?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
	<link href="<?php echo base_url('/extra/panel/');?>css/sb-admin.css" rel="stylesheet">
	<link href="<?php echo base_url('/extra/panel/');?>css/style.css" rel="stylesheet">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?php echo base_url('/extra/panel/');?>js/index.js"></script>

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo base_url('admin');?>">Admin Panel</a>
	
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('admin');?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('panel/banner');?>">
					<i class="fa fa-check-square" aria-hidden="true"></i>
            <span class="nav-link-text">Banners</span>
          </a>
        </li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
				<a class="nav-link" href="<?php echo base_url('panel/usuarios');?>">
				<i class="fa fa-user-md" aria-hidden="true"></i>
            <span class="nav-link-text">Usuarios</span>
          </a>
        </li>
		

		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('panel/categorias');?>">
					<i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Categorias</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('panel/eventos');?>">
					<i class="fa fa-calculator" aria-hidden="true"></i>
            <span class="nav-link-text">Eventos</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('panel/noticias');?>">
          <i class="fa fa-newspaper-o" aria-hidden="true"></i>
            <span class="nav-link-text">Noticias</span>
          </a>
        </li>
  				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('Home');?>">
					<i class="fa fa-file-code-o" aria-hidden="true"></i>
					<span class="nav-link-text">Vista de Usuario</span>
          </a>
        </li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('user/login/')?>CerrarSesion">
					<i class="fa fa-sign-out" aria-hidden="true"></i> 
						<span class="nav-link-text">Cerrar Session</span>
          </a>
        </li>
      </ul>

		 

    
  </nav>


	<?php
	}



	function __destruct(){
		?>

	<!-- Bootstrap core JavaScript-->


    	<script src="<?php echo base_url('/extra/panel/');?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('/extra/panel/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- Core plugin JavaScript-->

    <script src="<?php echo base_url('/extra/panel/');?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('/extra/panel/');?>vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url('/extra/panel/');?>vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url('/extra/panel/');?>vendor/datatables/dataTables.bootstrap4.js"></script>
		<!-- Custom scripts for all pages-->

    <script src="<?php echo base_url('/extra/panel/');?>js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url('/extra/panel/');?>js/sb-admin-datatables.min.js"></script>
    <script src="<?php echo base_url('/extra/panel/');?>js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>

		
		<?php
	}


}

#Fin de la plantilla_helper.php
