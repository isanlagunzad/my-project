<!DOCTYPE html>
<html>
<head>
	<title>Census</title>
</head>
<body>
	<h1>Join</h1>
	<table border="1">
		<tr>
			<th>Name</th>
			<th>Gender</th>
			<th>Religion</th>
			<th>Role Type</th>
			<th>Occupation</th>
		</tr>
		<tr>
		<?php foreach ($g as $row) {?>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['gender'];?></td>
			<td><?php echo $row['religion'];?></td>
			<td><?php echo $row['role'];?></td>
			<td><?php echo $row['occupation'];?></td>
		</tr>
		<?php } ?>
	</table>
	<hr>
	<h1>Insert</h1>
	<form method="POST" action="?ref=insert">
		<input type="text" name="name" placeholder="Name" autofocus><br>
		<select name="g">
		<option selected disabled>Gender</option>
		<?php foreach ($gender as $row_1) {?>
		  <option><?php echo $row_1['gender']; ?></option>
		<?php }?>
		</select>
		<br>
		<input type="submit" value="Insert">	
	</form>
</body>
</html>