<?php
if(!$_SESSION['utilizador']) {
	header('Location: index.php');
	exit();
}