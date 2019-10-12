<?php
	if(isset($_POST['submit']))
	{
		$uname = $_POST['uname'];
		$pswd = $_POST['pswd']; 
		if($uname == 'admin' && $pswd == '123')
		{
			session_start();
			$_SESSION['uname'] = $uname;
			if(empty($_SESSION['token']))
			{
				$_SESSION['token'] = bin2hex(random_bytes(32));
			}
			header('Location: home.html');

		}
		else
			header('Location: index.html');
	}	
?>
