<?php

	include $_SERVER['DOCUMENT_ROOT'].'/ControlBalneario/Models/Corte.php';

	if( $_GET['action'] == "getAll" ){

	    $c = new Corte;
	    $all = $c->getAll_json();
	    
	    print( $all );

	}else if( $_GET['action'] == "save" ){

	      $object = json_decode( $_GET['data'], true );
	      $c = new Corte;
	      $c->create( $object );
	      $c->save();
	      print("success");

	}else if( $_GET['action'] == "update" ){

	      $c = new Corte;
	      $c->create( json_decode( $_GET['data'], true ) );
	      $c->update();

      	}else if( $_GET['action'] == "delete" ){

	      $attr = $_GET['attr'];
	      $value = $_GET['value'];

	      $c = new Corte;
	      $c->delete($attr, $value);

	      print( "success" );
	      
      	}else if( $_GET['action'] == "getByAttr" ){
	      
	      $attr = $_GET['attr'];
	      $value = $_GET['value'];

	      $c = new Corte;
	      $result = $c->getByAttr_json( $attr, $value );      
	      
	      print_r( $result  );


      	}
	
?>