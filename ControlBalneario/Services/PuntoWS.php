<?php

	include $_SERVER['DOCUMENT_ROOT'].'/ControlBalneario/Models/Punto.php';

	if( $_GET['action'] == "getAll" ){
	    $p = new Punto;
	    $all = $p->getAll_json();

	    print_r( $all );
	}
?>