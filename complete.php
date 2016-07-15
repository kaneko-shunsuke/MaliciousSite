<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Reset Password Completed</title>
		<!-- BootstrapのCSS読み込み -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- 独自CSS読み込み -->
		<link href="css/custom-default.css" rel="stylesheet">
		<!-- jQuery読み込み -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- BootstrapのJS読み込み -->
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="./index.html">Malicious Site</a>
			</div>

		  </div>
		</nav>

		<div class="main-container">

			<blockquote class="block-message-alert">
				<p> Your Passwords were leaked.</p>
			</blockquote>

			<?php
				$old_password = @$_POST['old_password'];
				$new_password = @$_POST['new_password'];
				echo "old_password=" . $old_password;
				echo "<br>";
				echo "new_password=" . $new_password;
			?>

		</div>

	</body>
</html>
