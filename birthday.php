<?php

$birthyears = file('test_file.txt');
$birthyears = array_map('trim',$birthyears);
echo most_frequent($birthyears);


//given array of birthdays counts ones between 1900 and 2000 inclusive
//returns 0 if empty array or year with most birthdays
function most_frequent($birthyears){
	$count = 0;
	$year = 0;

	$possible_birthdays = array_fill(1900,101,0);
	foreach($birthyears as $x => $birthyear){
		if($birthyear >=1900 && $birthyear <= 2000){
			$possible_birthdays[$birthyear] += 1  ;//= $possible_birthdays[$birthyear] + 1;
		}
		if($possible_birthdays[$birthyear] > $count){
			$count = $possible_birthdays[$birthyear];
			$year = $birthyear;
		}
	}
	return $year;
}

?>
