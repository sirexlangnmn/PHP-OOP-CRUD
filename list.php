<a href="form.php">Create</a>
<br>

<?php 
	require_once( __DIR__ . '/functions.php');

?>

<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Age</th>
		<th>Description</th>
		<th></th>
		<th></th>
	</tr>
	<tr></tr>
	<?php foreach( lists() as $list ): ?>
		<tr>
			<td><?php echo $list['id'] ?></td>
			<td><?php echo $list['name'] ?></td>
			<td><?php echo $list['age'] ?></td>
			<td><?php echo $list['description'] ?></td>
			<td>
				<form method="post" action="handler.php">
					<input type="hidden" name="action" value="edit">
					<a href="/projects/web/native/crud/form.php?id=<?php echo $list['id'] ?>">Edit</a>
				</form>
			</td>
			<td>
				<form method="post" action="handler.php">
					<input type="hidden" name="action" value="delete">
					<input type="hidden" name="user_id" value="<?php echo $list['id'] ?>">

					<button type="submit">
						Delete
					</button>
				</form>
			</td>
		</tr>
	<?php endforeach ?>
</table>
