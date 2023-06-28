<?php

try {
	$pdo = new PDO('mysql:dbname=examDB; host=localhost', 'root', '');
} catch (PDOException $e) {
	die($e->getMessage());
}