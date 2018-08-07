<?php  plantilla::iniciar();?>
<div class="content-wrapper">
<?php if(empty($listado)){?>
	<h1>Sin Categoria</h1> <br><br>
	<a href="<?php echo base_url('panel/categorias/agregar/')?>" >Agregar Categoria</a>
	<?php }else {?>
	 <div class="card mb-3">
        <div class="card-header">
					<i class="fa fa-table"></i> Listado de Categorias - (<?php echo count($listado)?>) Categoria 
				<br>
				<a href="<?php echo base_url('panel/categorias/agregar/')?>" >Agregar Categoria</a>
				</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th> ID</th>
									<th>Categoria</th>
									<th>Acciones</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
								<th>ID</th>
								<th>Categoria</th>
								<th>Acciones</th>
                </tr>
              </tfoot>
              <tbody>
								
							<?php
							foreach ($listado as $categoria ) {?>
							<tr>
							
								<td><?php echo $categoria->id?></td>	
								<td><?php echo $categoria->nombre?> </td>
								<td>
									
				

								<a href="#" 
								onclick="eliminarCategoria()">
								Eliminar
								</a> - 
								<a id="eliminarCategoria" href="<?php echo base_url('panel/categorias/eliminar/')?>
								<?php echo $categoria->id?>" style="display:none" >Prueba</a>
								<a href="<?php echo base_url('panel/categorias/modificar/')?>
								<?php echo $categoria->id;   ?>" >Editar</a> - 
								<a href="<?php echo base_url('panel/subCategorias/load/')?>
								<?php echo $categoria->id?>">Ver SubCategorias</a>
								</td>
								</tr>
		
		<?php }?>

         
<?php }?>     
              </tbody>
            </table>
          </div>
        </div>

			</div>



</div>

