<?php

	include $_SERVER['DOCUMENT_ROOT'].'/ControlBalneario/Models/Permission.php';

	if( $_GET['action'] == "getAll" ){

	  $p = new Permission;
	  $all = $p->getAll_json();
	  
	  print_r( $all );

	} else if( $_GET['action'] == "update" ){
	  
	  $p = new Permission;
	  $p->create( json_decode( $_GET['data'], true ) );
	  $p->update( );
	  print("success");

	} else if( $_GET['action'] == "save" ){
	  
	}
?>