<?php
	extract($_GET);

	$fileData=file_get_contents("malls.txt");
	//echo $fileData;

	$theData=explode(";",$fileData);

	for($i=0;$i<sizeof($theData);$i++) {
		if (strpos($theData[$i], $data) !== false){
			echo $theData[$i].";";
		}
	}
?>
