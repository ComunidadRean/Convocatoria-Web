<?php

/**
 * 
 * WoW Rean. 2014
 *
 * An open source challenge for new candidates of backend team.
 *
 * @author Aerz <contact@aerz.me>
 * @license  http://opensource.org/licenses/GPL-3.0 GNU General Public License, version 3 (GPL-3.0)
 *
 * Happy coding!
 *
 */

define ('PATH', 1);

if (!isset($_GET['quest'])) {

	return header("Location: ../index.php");

} else {

	if (file_exists('questions/'.$_GET['quest'].'.php')) {

		include 'questions/'.$_GET['quest'].'.php';
	
	} else {
		
		return header('Location: ../index.php');
	
	}
}
