<?php
class Books{
	
	// member variables
	var $price;
	var $title;
	var $color;

	
	// member functions
	protected function setPrice($par){
		$this->price = $par;
	}

	function getPrice(){
		return $this->price;
	}

	function setTitle($par){
		$this->title = $par;
	}

	function getTitle(){
		return $this->title;
	}

	function setColor($par){
		$this->color = $par;		
	}

	function getColor(){
		return $this->color;
	}


}


class Books2{
	
	// member variables
	var $price;
	var $title;
	var $color;

	// constructor
	function __construct($myprice, $mytitle, $mycolor){
		$this->price = $myprice;
		$this->title = $mytitle;
		$this->color = $mycolor;
	}

	// member functions
	function setPrice($par){
		$this->price = $par;
	}

	function getPrice(){
		return $this->price;
	}

	function setTitle($par){
		$this->title = $par;
	}

	function getTitle(){
		return $this->title;
	}

	function setColor($par){
		$this->color = $par;		
	}

	function getColor(){
		return $this->color;
	}


}


class Novel extends Books{
	// member variable
	var $publisher;


	// member functions
	function setPublisher($par){
		$this->publisher = $par;
	}

	function getPublisher(){
		return $this->publisher;
	}


	public function setPrice($par){
		$this->price = $par + 300;		
	}



}

?>