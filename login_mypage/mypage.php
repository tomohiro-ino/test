<?php
mb_internal_encoding("UTF8");
session_start();

if(empty($_SESSION['id'])){
	

try{
	//DB接続
$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","mysql");
}catch(PDOException $e){
die("<p>申し訳ございません。現在サーバーが混み合っており一時的にアクセスが出来ません。<br>しばらくしてから再度ログインをしてください。</p>
<a href='http://localhost/login_mypage/login.php'>ログイン画面へ</a>");
}

$stmt = $pdo->prepare("select * from login_mypage where mail=?&&password = ?");
	
$stmt->bindvalue(1,$_POST["mail"]);

$stmt->bindvalue(2,$_POST["password"]);
	
$stmt->execute();
	
	while($row=$stmt->fetch()){
$_SESSION['id']=$row['id'];
$_SESSION['name']=$row['name'];
$_SESSION['mail']=$row['mail'];

$_SESSION['password']=$row['password'];
		
$_SESSION['picture']=$row['picture'];
		
		
$_SESSION['comments']=$row['comments'];	
			
}
	
if(empty($_SESSION['id'])){
 header("Location:login_error.php");
}
}


setcookie('mail',$_POST['mail'],time()+60*60*24*7);

setcookie('password',$_POST['password'],time()+60*60*24*7);







$pdo = NULL;

?>

<!DOCTYPE html>
<html lang="ja">
	
<head>
	<meta charset="UTF-8">
	<title>マイページ登録</title>
	<link rel="stylesheet" type="text/css" href="mypage.css">
	
	</head>
	
	<body>
		
	<header>
		<img src ="4eachblog_logo.jpg">
		<div class="logout"><a href="log_out.php">ログアウト</a></div>
		</header>
		
		
	<main>
		<div class="box">
			<h2>会員情報</h2>
			<div class="hello">
				<?php echo"こんにちは! ".$_SESSION['name']. "さん";?>
			</div>
			
		<div class="profile_pic">
			<img src="<?php echo$_SESSION['picture'];?>">
			</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</body>
</html>
	
	
	
	
	
	
	
	
	