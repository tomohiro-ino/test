
<html lang="ja">

	
	
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
 <body>
	
<?php
	 
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","mysql");
$stmt = $pdo->query("select*from 4each_keijiban");
	 

	 
?>
		
<img src="4eachblog_logo.jpg">
	
<header>

		<ul class="menu">
		<li>トップ</li>
		<li>プロフィール</li><li>4eachについて</li><li>登録フォーム</li>
		<li>問い合わせ</li>
		<li>その他</li>
	</ul>
	
</header>
	<main>

<div class="left">
<div class="maincontainer">
<div class="left">
	</div>
	
	
<border>
<h1>プログラミングに役立つ掲示板</h1> 
</border>
	
	
	
     
<form method="post" action="insert.php">

	<p>入力フォーム</p>
	
 <div>
	 

	 <label>ハンドルネーム</label>
　<br>
	<input type ="text"class="text"size="35" name="handlename">
 
		
 <div>
	 <label>タイトル</label>
　<br>
	<input type ="text"class="text"size="35" name="title">
 </div>
		
 <div>
	 <label>コメント</label>
	 <br>
	 	<textarea cols="50" rows="7" name="comments">
		 </textarea>
 </div>
	 <br>
		<div>	 
	<input type="submit" class="submit" value="投稿する">
	 </div>
	</div>
	</form>
	<br>
	 
	
<?php
while($row = $stmt->fetch()){
 echo"<div class= 'kiji'>";
 echo"<h3>".$row['title']."</h3>";
echo"<div class='cotents'>";
echo $row['comments'];
echo"<div class = 'handlename'>posted by".$row['handlename']."</div>";
	 echo"</div>";
    echo"</div>";
}
?>
	<br>
	</div>
		</div>
<div class="right">
	 
    <h2>人気の記事</h2>
  <ul>
 <li>PHP オススメ本</li>
 <li>PHP Mdminの使い方</li>
<li>今人気のエディタTop5</li>　
    <li>HTMLの基礎</li>
     </ul>
    <h2>オススメリンク</h2>
     <ul>
<li>インターノウス株式会社</li>
 <li>XAMPPのダウンロード<li>
<li>Eclipseのダウンロード</li> <li>Bracketsのダウンロード</li>
    </ul>
   <h2>カテゴリ</h2>
   <ul>
   <li>HTML</li>
   <li>PHP</li>
   <li>MySQL</li>
   <li>JavaScript</li>
   </ul>
   </div>
		
	</main>
	</body>
	
	
  <footer>copyright internous|4each blog is the one which provides A to Z about programming.</footer>
	
	

		
</html>