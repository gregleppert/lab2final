<?php
	$name = $_POST[name];
	$email = $_POST[email];
	include('class/mysql_crud.php');
	$db = new Database();
	$db->connect();
	$db->insert('CRUDClass',array('name'=> $name,'email'=>$email));  // Table name, column names and respective values
	$res = $db->getResult();  
	print_r($res);
?>