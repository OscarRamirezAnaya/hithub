/*SWITCH PRINCIPAL*/

/* *****************************************
*   Motor que incluira los videos  de la pagina 
    mediante AJAX $ JQUERY

 ************************************************/    

function agregar(x){


    var location = 'ContenidoVideo.php#contenido'; 

    $.ajax({
            type: "GET",//metodo de envio
            url: location ,//archivo que invoco
            data: { id : x },// parametros de busqueda
            cache: true,
            success: function(response) {  
            
    $('#contenido').html(response);//id  donde lo coloca
            //alert(response);
            
        }
    }); 
}

function agregarSerie(x){


    var location = 'menuseries.php'; 

    $.ajax({
            type: "GET",//metodo de envio
            url: location ,//archivo que invoco
            data: { id : x },// parametros de busqueda
            cache: true,
            success: function(response) {  
            
    $('#menuseries').html(response);//id  donde lo coloca
            //alert(response);
            
        }
    }); 
}

function Buscar(){

    var x = document.getElementById('buscarvideo').value;
    var location = 'Resultados.php'; 

    $.ajax({
            type: "GET",//metodo de envio
            url: location ,//archivo que invoco
            data: { buscar : x },// parametros de busqueda
            cache: true,
            success: function(response) {  
            
    $('#menuseries').html(response);//id  donde lo coloca
            //alert(response);
            
        }
    }); 
}

