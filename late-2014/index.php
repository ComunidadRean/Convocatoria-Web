<?php

define('PATH', 1);

if(!isset($_GET['page'])) {

	header("Location: ../index.php");

} else {

	if(!file_exists('views/'.$_GET['page'].'php')) {

		include('views/'.$_GET['page'].'.php');
	
	} else {
		
		header('Location: ../index.php');
	
	}
}
