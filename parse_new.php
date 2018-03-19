<?php

require_once('mysqli_connect.php');

$textCnt  = "articles.txt";
$contents = file_get_contents($textCnt);
rtrim($contents,'}');
$arrfields = explode('}', $contents);
$i = 1001;
foreach($arrfields as $field) {
    /*echo $field;
	echo "";
	echo "";
	echo "";*/
	//$field = substr( $field, 1 );
	$arrfields2 = explode('|', $field);
	$arrfields2[0] = mysqli_real_escape_string($dbc, $arrfields2[0]);
	$arrfields2[1] = mysqli_real_escape_string($dbc, $arrfields2[1]);
	$arrfields2[2] = mysqli_real_escape_string($dbc, $arrfields2[2]);
	$arrfields2[3] = mysqli_real_escape_string($dbc, $arrfields2[3]);
	$arrfields2[4] = mysqli_real_escape_string($dbc, $arrfields2[4]);
	$query = "INSERT INTO `News` (`NewsID`, `Title`, `date`, `URL`, `summary`) 
	VALUES ('$i', '$arrfields2[1]', '$arrfields2[2]', '$arrfields2[0]', '$arrfields2[3]');";
	$response = @mysqli_query($dbc, $query);
	$i++;
	
	// If the query executed properly proceed
	if(!$response){
	
		echo mysqli_error($dbc);
		echo "</BR>";
		echo "</BR>";
	
	} else {
	
	//echo "Data added successfully.";
	}
}
echo mysqli_error($dbc);
	
	/*foreach($arrfields2 as $field2) {		
		echo $field2;
		echo "\nXXXXXX\n";
	}*/
	//echo arrfields2[0];

// Close connection to the database
mysqli_close($dbc);	

?>