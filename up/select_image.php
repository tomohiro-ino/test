<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","mysql");

$result = $pdo->query("select  image from img_upload;");

foreach($result as $row){
 $uploaded_img = $row['image'];}

$image_path="./image/".$uploaded_img;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>画像アップロード</title>
</head>
<body>
	<img src="<?php echo $image_path; ?>">
	</body>
</html>
