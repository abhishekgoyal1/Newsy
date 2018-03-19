<?php

$textCnt  = "data.txt";
$contents = file_get_contents($textCnt);
$arrfields = explode('}', $contents);

foreach($arrfields as $field) {
    /*echo $field;
	echo "";
	echo "";
	echo "";*/
	$field = substr( $field, 1 );
	$arrfields2 = explode('|', $field);
	foreach($arrfields2 as $field2) {
		echo $field2;
		echo "\nXXXXXX\n";
	}
	//echo arrfields2[0];
}

?>