<html>
    <head>
        <title>connect.php</title>
    </head>
    <body>
        <?php
			print('<p>接続開始</p>');
			$link = mysqli_connect('localhost', 'ubuntu', 'ubuntu');
			if (!$link) {
				print('<p>接続失敗</p>');
    			die('接続失敗です。'.mysql_error());
			}

			print('<p>接続に成功しました。</p>');

			// MySQLに対する処理
			

			$close_flag = mysql_close($link);

			if ($close_flag){
    			print('<p>切断に成功しました。</p>');
			}
        ?>
    </body>
</html>
