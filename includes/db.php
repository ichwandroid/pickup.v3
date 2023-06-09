<?php
abstract class db
{
	public function connect()
	{
		try {
			$pdo = new PDO("mysql:host=localhost;dbname=pickup", "root", "");
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		} catch (PDOException $e) {
			echo "Connection Error ! " . $e->getMessage();
		}
	}
}
