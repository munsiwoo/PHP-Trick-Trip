<?php
error_reporting(0);
# made by munsiwoo

if(isset($_GET['source'])) {
	show_source(__FILE__);
	die;
}

function check_ext($filename) {
	$ext = pathinfo($filename)['extension'];
	if(preg_match("/php|pht|htm|hta/i", $ext)) {
		die('filtered!');
	}
}

if(isset($_FILES['file'])) {
	$filename = $_FILES['file']['name'];
	check_ext($filename);	

	if(move_uploaded_file($_FILES['file']['tmp_name'], $filename)) {
		die('<script>alert("upload ok");location.href="index.php";</script>');
	}
	else {
		die('<script>alert("upload failed");location.href="upload.php";</script>');
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h2>upload</h2>
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="file">
		<input type="submit" value="upload">
	</form>
	<a href="?source">source</a>
</body>
</html>


