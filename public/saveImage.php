<?php
	$imagename = $_REQUEST['imageName'];
 	$data = $_REQUEST['data'];
    $rawImage =$data;
	$removeheaders =substr($rawImage,strpos($rawImage,",")+1);
	$decode = base64_decode($removeheaders);
    $fopen =fopen('../uploads/'.$imageName,'wb');
	fwrite($fopen,$decode);
	fclose($fopen);
	echo $imageName;
 ?>