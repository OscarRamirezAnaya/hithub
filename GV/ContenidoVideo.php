
<?php 

	$id = $_GET['id'];




	include_once('model/Objets_DB.php');

		$db_mysql->Conectar();
		$db_mysql->seleccionar_DB();
		//actualizo Reproducciones 
		$query="update Cat_Videos set Reproducciones = Reproducciones + 1 where id_video='".$id."' ;";
		$sel=$db_mysql->Query($query);

		$query="select * from Cat_Videos where id_video='".$id."' ;";
		$sel=$db_mysql->Query($query);
		$my_row = $db_mysql->row($sel);

		$url = $my_row['urlVideo'];



 ?>


			
   <div class="panel col-md-8 col-md-offset-2" style="background-color:black; color :white;text-align :center;"><h3><?php echo utf8_encode($my_row['NombreVideo']); ?></h3></div>
			
			<div style="background-color:black; padding-top: 10px;  "
						class="panel col-md-10 col-md-offset-1">

			<div class="embed-responsive embed-responsive-16by9">
			  <iframe class="embed-responsive-item" src="<?php echo $url; ?>"></iframe>
			  </div>
			  <div class="panel col-md-8 col-md-offset-2" style="background-color:black; color :white;text-align :center;">Video del :</strong><?php echo $my_row['FechaEvent']; ?>
					&nbsp;<strong  style ="color:red;" >Reproducciones :</strong><?php echo $my_row['Reproducciones']; ?></div>

			</div>
			
		