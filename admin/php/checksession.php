<?php 	
session_start();
if(isset($_SESSION['admin']) || !empty($_SESSION['admin'])) {
	echo 'true';
} else {
	echo 'false';
}
