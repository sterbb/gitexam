<?php

class Connection{
	public function connect(){
		$link = new PDO("mysql:host=localhost;dbname=tailwind", "root", "");

		$link -> exec("set names utf8");
		return $link;
	}

}