 <?php 


        $buscar='';

        if(isset($_GET['buscar'])){$buscar=$_GET['buscar'];}


        include_once('model/Objets_DB.php');
        $db_mysql->Conectar();
        $db_mysql->seleccionar_DB();
        $query="SELECT * FROM Cat_Videos
                where NombreVideo like '%".$buscar."%'
                and status =1 ;";

        $sel=$db_mysql->Query($query);
        

  ?>
            

                <div  class="panel-heading"> <strong style="color:white; font-size:20px;">Resultados <span class="glyphicon glyphicon-search" aria-hidden="true"></span></strong></div>
                 <?php while($my_row = $db_mysql->row($sel)){?>
                    <?php $img = $my_row['img_video']; 
                          $color = $my_row['colortexto']; ?>
                  <div class="well" style=" 
                            background-image: url('images/<?php echo $img; ?>');
                            background-size: cover;
                            -moz-background-size: cover;
                            -webkit-background-size: cover;
                            -o-background-size: cover;
                            color:<?php echo $color; ?>;">
                    <strong><?php echo utf8_encode($my_row['NombreVideo']); ?></strong>
                    <?php echo utf8_encode($my_row['DescripccionVideo']); ?>
                    <br>
                    <br>
                    <p><a href="#contenido" Onclick="javascript:agregar(<?php echo $my_row['id_video']; ?>);" class="btn btn-primary" role="button">Ver Video</a></p>
                  </div>
             <?php } ?>