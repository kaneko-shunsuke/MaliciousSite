<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Send Malicious Mail</title>
		<!-- BootstrapのCSS読み込み -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
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

		<?php

			//言語設定、内部エンコーディングを指定する
			mb_language("japanese");
			mb_internal_encoding("UTF-8");

			//$sendto = $_POST['txt-sendto'];
			$targetEmail = $_POST['target-email'];
			$subject     = $_POST['subject'];
			$message     = $_POST['message'];
			$spoofEmail  = $_POST['spoof-email'];

			print("The Malicious Mail will be Sent to MailAddress：$targetEmail<br />");

			mb_send_mail($targetEmail,$subject,$message,"From:".$spoofEmail);

			print("Complete.");

		?>
		<br>

		<a href="./index.html">Return to HOME</a>

	</body>
</html>
