<?php 
require 'models/db.php';
require 'models/functions.php';

	if(isset($_POST['ref']))
	{
		$ref = $_POST['ref'];
	}
	elseif(isset($_GET['ref']))
	{
		$ref = $_GET['ref'];
	}
	else
	{
		$ref = 'main';
	}

	if($ref == 'main')
	{
		$g = getData();
		$gender = getGender();
		include 'views/census.php';
	}
	elseif($ref == 'insert')
	{
		$name = $_POST['name'];
		$gender = $_POST['g'];

		insert($name,$gender);
		header('location:?ref=main');
	}










 ?>