<?php
error_reporting(0);
# you can upload file at the upload.php
# made by munsiwoo

if($_GET['file']) {
	$file = basename($_GET['file']);
	if(file_exists($file)) die('bye');
	include $file;
}

show_source(__FILE__);

