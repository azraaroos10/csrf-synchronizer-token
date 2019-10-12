<?php
	session_start();
	$data['csrf'] = $_SESSION['token'];
	echo json_encode($data);
?>