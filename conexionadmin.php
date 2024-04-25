<?php
Class Conexion{
	static public function conectar(){
		$link = new PDO("mysql:host=localhost;dbname=worldofgames","root","");
		$link->exec("set names utf8");
		return $link;
	}
}
