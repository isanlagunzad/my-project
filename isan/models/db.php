<?php 


	try {
		$pdo = new PDO('mysql:host=localhost;dbname=bims','root','');
	} catch (Exception $e) {
		die($e->getMessage());
	}







 ?>