<?php 
		
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Galeria de Videos</title>
	<?php include_once('librerias.php'); ?>
	<style>
	
.statico {
  position: fixed;
  z-index: 100;
 }
	</style>
</head>
<body onload="nobackbutton();">
	<?php //include_once('config/header.php'); ?>
	<div class="col-md-12">
		<?php include_once('menu.php'); ?>
	</div>
	<div class="col-md-12" style="padding-top: 40px; padding-bottom: 40px;">
		<div class="col-md-2 panel panel-default"><?php include_once("sidebar.php"); ?></div>
		<div class="col-md-10 "><?php include_once("contenido.php"); ?>
<div class="embed-responsive embed-responsive-16by9">
<!--  <iframe src="https://www.youtube.com/embed/_mn4Q5MDdoA" frameborder="0" allowfullscreen></iframe>
 -->
 <div>esto es del dba</div>
</div>
		</div>
	</div>
	<div class="col-md-12">
		<?php include_once('footer.php'); ?>
	</div>
</body>
</html>