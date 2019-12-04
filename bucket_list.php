<?php

$activiteiten = readline ("Hoeveel activiteiten wil je toevoegen?");

if (is_numeric($activiteiten)) {
	echo "";
} else {
	exit("Dit is geen getal, probeer opnieuw");
}

$bucketlist = array();

for ($i=0; $i < $activiteiten; $i++) {
	echo $i;
	$toevoegen = readline ("Wat wil je toevoegen aan je bucket list?");
	$bucketlist[] = $toevoegen;
}

print_r($bucketlist);

