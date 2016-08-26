<?php 

require 'models/db.php';



function getData()
{
	global $pdo;
	$stmt = $pdo->query("SELECT users.name,gender.gender,religion.religion,role_type.role,occupation.occupation FROM users,gender,religion,role_type,occupation WHERE users.gender_id=gender.gid AND users.religion_id=religion.rid AND users.role_id=role_type.rtid AND users.occupation_id = occupation.oid ");
	return $stmt->fetchAll();
}
function getGender()
{
	global $pdo;
	$stmt = $pdo->query("SELECT * FROM gender");
	return $stmt->fetchAll();
}
function insert($a,$b)
{
	global $pdo;
	$stmt = $pdo->query("INSERT INTO users SET name = '$a',gender_id = '$b'");
}





 ?>