<?php
mb_internal_encoding("UTF8");

$temp_pic_name = $_FILES['picture']['tmp_name'];

$original_pic_name =$_FILES['picture']['name'];
$path_filename ='./image/'.$original_pic_name;

move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);

?>

<!DOCTYPE html>
<html lang="ja">
	
<head>
	
<title>マイページ登録</title>
	
<link rel="stylesheet" type="text/css" href="register_comfirm.css">
	
</head>

<body>
<header>
	 <img src = "4eachblog_logo.jpg">
	 <div class="login"><a href="log_out.php">ログアウト</a>
	 </div>
	</header>
	
<main>
	
	<form action="register_confirm.php" method="post"enctype="multipart/form-data">
	<div　class="form_contents">
		
		<h2>会員情報</h2>
		
		<h3>山田太郎さん　こんにちは</h3>
	
	 <img src = "sato_kosuke.jpg">	
		
		
	<div class="name">
	氏名:山田太郎<p>
		</div>
		
	<div class="mail">
   メール:abce@internous.co.jp<p>
		</div>
		
	<div class="password">
  パスワード:123456<p>
		</div>
		
	<div class="comments">
	1990年、東京都生まれ、東京育ち。日本大学で経済学を専攻。卒業後は中堅の貿易商社に入<br>
	社。簿記の資格を保持するきっかけから会計事務所へ転職。主にスタートアップの財務会<br>
	計・管理会計をサポートしています。趣味は音楽鑑賞、映画鑑賞、夏はバス釣り、冬はスノー<br>
	ボードをします。
		</div>
		
	<input type="submit"value=編集する>
		
		
	
		

	</div>
		
	</form>
	</main>

<footer>
2018 InterNous.inc.All rights reserved
	</footer>
	
	
</body>
	
	
</html>
