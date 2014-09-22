<?php

	include $_SERVER['DOCUMENT_ROOT'].'/ControlBalneario/Models/User.php';

	if( $_GET['action'] == "getAll" ){

	  $u = new User;
	  $all = $u->getAll_json();
	  
	  print( $all );

	}else if( $_GET['action'] == "getByAttr" ){
	      
	      $attr = $_GET['attr'];
	      $value = $_GET['value'];

	      $u = new User;
	      $result = $u->getByAttr_json( $attr, $value );      
	      
	      print( $result  );

      	}

?>