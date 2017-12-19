<?php
//Holds recipe data
class Recipe {
	private $title;
	private $ingredients = [];
	private $source = "Christian Mackler";
	private $instuctions = [];
	private $yield;
	private $tag = [];
	//sets acceptable measurements
	private $measurements = [
		"tsp",
		"tbsp",
		"cup",
		"oz",
		"lb",
		"fl oz",
		"pint",
		"quart",
		"gallon"
	];
	//sets title and source on instantiation
	public function __construct($title = null, $source = null) {
		$this->setTitle($title);
		$this->setSource($source);
	}
	//function to set the title of the recipe
	public function setTitle($title) {
		if(empty($title)){
			$this->title = null;
		} else {
			$this->title = ucwords($title);
		}
	}
	//get the title
	public function getTitle() {
		return $this->title; 
	}
	//function to add ingredients
	public function addIngredient($item, $amount = null, $measure = null) {
		if ($amount != null && !is_float($amount) && !is_int($amount)) {
			exit("The amount must be a float. '" . gettype($amount) . "' given."); 
		}

		if($measure != null && !in_array(strtolower($measure), $this->measurements)){
			exit("Please enter an acceptable measurement: " . implode(", ", $this->measurements) . " are valid measurements");
		}

		$this->ingredients[] = [
			"item" => ucwords($item),
			"amount" => $amount,
			"measure" => strtolower($measure)
		];
	}
	//get the indgredients
	public function getIngredients() {
		return $this->ingredients;
	}
	//add instructions to an array
	public function addInstruction($string) {
		$this->instructions[] = $string;
	}
	//get instructions
	public function getInstructions() {
		return $this->instructions;
	}
	//add tags
	public function addTag($tag) {
		$this->tags[] = strtolower($tag);
	}
	//get tags
	public function getTags() {
		return $this->tags;
	}
	//sets yield
	public function setYield($yield) {
		$this->yield = $yield;
	}
	//gets yield
	public function getYield() {
		return $this->yield;
	}
	//function to set source of recipe
	public function setSource($source) {
		if(empty($source)) {
			$this->source = null;
		} else {
			$this->source = ucwords($source);		
		}
		
	}
	//get the source
	public function getSource() {
		return $this->source;
	}
}

