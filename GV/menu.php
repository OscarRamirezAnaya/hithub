<?php 
  
  $m = 'Inicio de Sesion';

 if(isset($_GET['m'])){ $m = $_GET['m'];}


 ?>
<script type="text/javascript" src="Librerias/functions/functionMenuJS.js"></script>
<nav class="navbar navbar-default navbar-fixed-top " role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" style="color: red;" href="#" >Despierta y Brilla</a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class=""><a href="?m=Home">Home | <span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
      <li><a href="?m=Clientes">Jovenes | <span class="glyphicon glyphicon-leaf" aria-hidden="true"></span></a></li>
      <li><a href="?m=Productos">Familia | <span class="glyphicon glyphicon-grain" aria-hidden="true"></span></a></li>
      <li><a href="?m=Ventas">Eventos | <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><strong>AQUI</strong></a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Opciones <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li class="divider"></li>
          <li><a href="javascript: confirmarSalir();">Cerrar Sesi&oacute;n</a></li>
          <li class="divider"></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

