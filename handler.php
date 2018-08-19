<?php

require_once( __DIR__ . '/functions.php');

if( isset($_POST['action'] ) ){
	if($_POST['action'] == 'form'){

		create($_POST);
	}

	if($_POST['action'] == 'form_edit'){

		update($_POST);
	}

	if($_POST['action'] == 'delete'){

		delete($_POST);
	}
}