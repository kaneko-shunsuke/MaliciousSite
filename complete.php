<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
	$old_password = @$_POST['old_password'];
	$new_password = @$_POST['new_password'];



?>
<html lang="ja">
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="main.css">
        <title>home.html</title>

    </head>
    <body>

		<!-- Container -->
		<div id="container">

			<!-- Header -->
			<div id="header">
				<h1 class="letterpress">Malicious Site Home</h1>
			</div>

			<!-- Contents -->
			<div id="content">
				<div class="section">
					<h3>パスワードが漏洩しました。</h3>
				</div>
			</div>

			<?php 
			echo "old_password=" . $old_password;
			echo "<br>";
			echo "new_password=" . $new_password;

			?>

			<!-- Footer 
			<div id="footer"></div>
			-->

		</div>

    </body>
</html>
