<?php 

try{
	$pdo = new PDO('mysql:host=localhost;dbname=news', 'root', '');
} catch (PDOException $e) {
	exit ('database error.');
}

?>


