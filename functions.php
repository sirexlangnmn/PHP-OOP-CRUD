<?php

require_once( __DIR__ . '/database.php');

function lists(){
	$database = new Database;

	$list = $database->select('users', false, false, false, false)->result_array();

	return $list;
}

function create( $data ){
	$database = new Database;

	$database->insert('users', ['name' => $data['name'], 'age' => $data['age'], 'description' => $data['description']]);

	header('Location: /projects/web/native/crud/');

	exit;
}

function update( $data ){

	$database = new Database;

	$database->update( 'users', ['name' => $data['name'], 'age' => $data['age'], 'description' => $data['description'] ], ['id' => $data['user_id'] ] );

	header('Location: /projects/web/native/crud/');
}

function delete( $data ){

	$database = new Database;

	$database->delete( 'users',['id' => $data['user_id']]);

	header('Location: /projects/web/native/crud/');

}