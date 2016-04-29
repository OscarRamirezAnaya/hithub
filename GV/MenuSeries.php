 <?php 


        $idserie=1;

        if(isset($_GET['id'])){$idserie=$_GET['id'];}


        include_once('model/Objets_DB.php');
        $db_mysql->Conectar();
        $db_mysql->seleccionar_DB();
        $query = "select * from Cat_Series
                  where id_serie = '".$idserie."';";
                    //echo $query;
                  $sel=$db_mysql->Query($query);
                 $my_row = $db_mysql->row($sel);
                  $serie = $my_row['NombreSerie'];


        $query="SELECT * FROM Cat_Videos 
                where id_Serie = '".$idserie."' 
                and status = 1;";

        $sel=$db_mysql->Query($query);
        

  ?>
            
                  <h1 style="color:white;" ><?php echo utf8_encode($serie);?></h1><br>
                  <div class="row">
    <?php while($my_row = $db_mysql->row($sel)){?>
                         <?php $img = $my_row['img_video']; 
                          $color = $my_row['colortexto']; ?>


                      
                    <div class="col-sm-6 col-md-4" >
                      <div class="thumbnail" style="background-color:black;">
                        <img src="images/<?php echo $img; ?>" style="min-height:200px; max-height:200px;  max-width:280px;"alt="30%x200 ">
                        <div style="color:white; text-align:center; background-color:black;" class="caption">
                          <strong><?php echo utf8_encode($my_row['NombreVideo']); ?></strong>
                          <p><?php echo substr(utf8_encode($my_row['DescripccionVideo']), 0, 4); ?></p>
                          <p>
                            <a style="background-color:gray; color:white; border:black solid 1px;"  href="#contenido" Onclick="javascript:agregar(<?php echo $my_row['id_video']; ?>);" class="btn btn-primary" role="button">Ver Video</a>
                            <a style="background-color:gray; color:white; border:black solid 1px;" href="#contenido" Onclick="javascript:agregar(<?php echo $my_row['id_video']; ?>);" class="btn btn-primary" role="button">M&aacute;s</a>
                          </p>
                        </div>
                      </div>
                    </div>
               
           <?php } ?>
              </div>








