<?php 
include_once "birthday.inc";

if($argc != 2){
	echo "Usage birthday.php {file}\n";
}else{
	$birthyears = file($argv[1]);
	$birthyears = array_map('trim',$birthyears);
	$year = most_frequent($birthyears);
	if($year === 0) {
		echo "inaccurate data in file\n";
	}else{
		echo "most frequent birthyear is: $year\n";
	}

}


?>
