<?php

class DataBase
{
	public $host ='';
    public $User = '';
    public $password ='';
    public $db='';

	
	function __construct($uno , $dos , $tres , $cuatro)
	{
		$this->host = $uno;
		$this->User = $dos;
		$this->password = $tres;
		$this->db = $cuatro;
	}


  public function Conectar(){

		$con =mysql_connect($this->host , $this->User, $this->password ) or die ('No se puede conectar con el servidor!!');

		return $con;
	}


	public function seleccionar_DB(){


		$dbs=mysql_select_db($this->db)or die ('no se puede acceder a la db');
		return $dbs;
	} 

    public function Query($query){

    	$querys = mysql_query($query);
    	return $querys;
    } 

    public function row($datos){

    	$sel= mysql_fetch_array($datos);
    	return $sel;
    }

}
//www.facebook.com/outcodenext


?>