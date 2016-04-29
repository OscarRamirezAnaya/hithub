<?php 

	//objetos DB
		
		include_once('model/Objets_DB.php');
		$db_mysql->Conectar();
		$db_mysql->seleccionar_DB();
		$query="SELECT * FROM Cat_Series;";

		$sel=$db_mysql->Query($query);
		


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrador de Contenido</title>
	<link href="css/bootstrap.css"rel="stylesheet" type="text/css">
	<script src="js/bootstrap.js" language="javascript" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js" charset="utf-8"></script>
	<script src="js/ajax_content.js"></script>
</head>
<body style="background-color:white;">
	<div style="background-color:skyblue;" class="page-header  rigth menu col-md-12">
			<h1 class="">Administrador de contenido <small>EnncomSystem</small></h1>
		<div  class="btn-group col-md-6" role="group" aria-label="Menu">
		  <button type="button" class="btn btn-default">Videos</button>
		  <button type="button" class="btn btn-default">Series</button>
		  <button type="button" class="btn btn-default">Blog</button>
		  <button type="button" class="btn btn-default">Contenidos</button>
		  <button type="button" class="btn btn-default">Config</button>
		</div>
	</div>

	<div  align="center" class="clo-md-12 panel">
		<form action="AdminConAdd.php" method="post">
		<div align="center" class="clo-md-6 panel-head" >Para su mejor funcionamiento se recomienda en Chrome y  Safari  gracias... </div>
		<div align="center" class="clo-md-6 panel-body" >

			<table  align="center"  class="col-md-4">
				<tr><td></td>
					<td colspan="3"><h3>Titulo de Video:</h3>
					</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td colspan="3"><input class="form-control" name="titulo" type="text">
									<p><span style="font-size:8px; font-family:verdana; color:gray;">Es el titulo que se presentara en el portal de videos</span></p>
					</td>
					<td></td>
				</tr>
				<tr><td></td>
					<td colspan="3"><h3>Url de Video:</h3>
					</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td colspan="3"><input class="form-control" name="url" type="text">
									<p><span style="font-size:8px; font-family:verdana; color:gray;">Campo de Direccion de video , Es necesario registrar la url que muestra en compartir no la que de encuentra la parte superior de la pagina!!!</span></p>
					</td>
					<td></td>
				</tr>

				<tr><td></td>
					<td colspan="3"><h3>Fecha del Video:</h3>
					</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td colspan="3"><input class="form-control" name="fecha" type="date">
									<p><span style="font-size:8px; font-family:verdana; color:gray;">Fecha del dia que fue la predica</span></p>
					</td>
					<td></td>
				</tr>
				<tr><td></td>
					<td colspan="3"><h3>Seleccione la serie a la que pertenece:</h3>
					</td>
					<td></td>
				</tr>

				<tr>
					<td></td>
					<td colspan="3">
						<select class="form-control" name="serie" id="">
							
							<?php while($my_row = $db_mysql->row($sel)){?>

							<option value="<?php echo $my_row['id_serie']; ?>"><?php echo $my_row['NombreSerie']; ?></option>
							<?php } ?>
						</select>
					</td>
					<td></td>
				</tr>
			</table>


			<div class="col-md-2"></div>


			<table  align="center"  class="col-md-4">
				<tr><td></td>
					<td colspan="3"><h3>Descripccion del Video:</h3>
					</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td colspan="3"><textarea class="form-control" name="desc" name="" id="" cols="30" rows="10"></textarea>
									<p><span style="font-size:8px; font-family:verdana; color:gray;">Describa el tema del video y versiculos relacionados</span></p>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="5"><input type="submit" value="Guardar" class="btn pils"></td>
				</tr>
			</table>

		</div>
		</form>
	</div>
	<div align="center" class="page-footer col-md-12">
			<div class="media">
			  <div class="media-center">
			    <a href="images/cruzdespiertayBrilla.jpg">
			      <img class="media-object" src="images/g316.png" alt="...">
			    </a>
			  </div>
			  <div class="media-body"></div>
			</div>
			<strong>Un Ministerio de Iglesia G:316</strong>

	</div>
	
</body>
</html>