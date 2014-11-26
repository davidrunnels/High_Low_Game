<?php

//High Low game

$guess_number = 0;

echo "Okay, let's play \"Guess a Number!\"\n";

if ($argc == 3) {

	$random_number = mt_rand($argv[1] , $argv[2]);

	echo "Guess the random number between $argv[1] and $argv[2].\n";
    
	} else {
		echo "Give me the range of numbers to use.\n";

		fwrite(STDOUT, "Enter the low number: ");

		$low_number = trim(fgets(STDIN));

		fwrite(STDOUT, "Enter the high number: ");

		$high_number = trim(fgets(STDIN));

		$random_number = mt_rand($low_number, $high_number);

		echo "Guess the random number between $low_number and $high_number.\n";
}

do {

	// user guess at number

	fwrite(STDOUT, 'Guess a number: ');

	// Get the input from user

	$guess = trim(fgets(STDIN));

	$guess_number++;


	if (is_numeric($guess)) {

		if ($guess > $random_number) {

    	echo "Lower...\n";

		} elseif ($guess < $random_number) {
   
    	echo "Higher...\n";

		} elseif ($guess = $random_number) {

		echo "You got it!\n";
		}

	}

	else {

		echo "Seriously, enter a NUMBER.\n";
	
	}

} while ($guess != $random_number);

	echo "It took you $guess_number guesses.\n";

