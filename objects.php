<?php
	
	include("books.php");

	// instatiating a class/ creating object of a class
	$geography = new Books;
	$chemistry = new Books;

	// using the setter functions
	$geography->setTitle("Topography Map Of West Africa");
	$geography->setPrice(5500.10);


	// accessing member variables
	//echo "I bought a new ". $geography->title. " for ". $geography->price. "</br>";

	// accessing member functions
	//echo "I bought a new ". $geography->getTitle(). " for ". $geography->getPrice(). "</br>";

	$bio = new Books;
	$bio->setTitle("Digestive System");
	$bio->setPrice(20000);
	$bio->setColor("brown");

	//echo "I am object " .$bio->title. " Having " .$bio->color . " color, worth ". $bio->price ." Naira";

	$maths = new Books2("24500", "Engineering Mathematics", "Skyblue");

	//var_dump($maths);

	//echo "I am object " .$maths->title. " Having " .$maths->color . " color, worth ". $maths->price ." Naira";


	$sugargirl = new Novel;
	$sugargirl->setTitle("Sugar Girl");
	$sugargirl->setPrice(5000);
	$sugargirl->setColor("brown");
	$sugargirl->setPublisher("Kola Onadipe");
	echo "<pre>";
	print_r($sugargirl);
	echo "</pre>";

	echo "the new price is ". $sugargirl->price;



	//var_dump($geography);
?>