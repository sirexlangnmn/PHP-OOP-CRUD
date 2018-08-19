<?php 

require_once( __DIR__ . '/database.php');


$database = new Database;

if(isset($_GET['id'])){
	$list = $database->select('users', [ 'id' => $_GET['id'] ], false, false, false)->row();
}
	
?>

<form action="handler.php" method="POST">
	<input type="hidden" name="action" value="<?php echo isset( $list ) ? 'form_edit' : 'form' ?>">
	<input type="hidden" name="user_id" value="<?php echo isset( $list ) ? $list->id : '' ?>">

	<input type="text" name="name" value="<?php echo isset( $list ) ? $list->name : '' ?>" placeholder="Name">
	<input type="number" name="age" value="<?php echo isset( $list ) ? $list->age : '' ?>" placeholder="Age">
	<input type="text" name="description" value="<?php echo isset( $list ) ? $list->description : '' ?>" placeholder="Description">
	<button type="submit">Submit</button>
</form>