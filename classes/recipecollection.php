<?php
//Holds all recipes
class RecipeCollection {
	private $titleOfCollection;
	private $recipes = [];
	//Adds title on instantiation
	public function __construct($titleOfCollection = null) {
		$this->setTitle($titleOfCollection);
	}
	//function to add title
	public function setTitle($titleOfCollection) {
		if(empty($titleOfCollection)){
			$this->titleOfCollection = null;
		} else {
			$this->titleOfCollection = ucwords($titleOfCollection);
		}
	}
	//add recipes to collection
	public function addRecipe($recipe) {
		$this->recipes[] = $recipe;
	}
	//get our recipes
	public function getRecipes() {
		return $this->recipes;
	}
	//get titles of each recipe
	public function getRecipeTitles() {
		$titlesOfRecipes = [];
		foreach ($this->recipes as $recipe) {
			$titlesOfRecipes[] = $recipe->getTitle();
		}
		return $titlesOfRecipes;
	}
	//filter recipes by tag
	public function filterByTag($tag) {
		$taggedRecipes = [];
		foreach ($this->recipes as $recipe) {
			if(in_array(strtolower($tag), $recipe->getTags())){
				$taggedRecipes[] = $recipe;
			}
		}
		return $taggedRecipes;
	}
	//gets all ingredients to populate shopping list
	public function getCombinedIngredients() {
		$ingredients = [];
		foreach ($this->recipes as $recipe) {
			foreach ($recipe->getIngredients() as $ing) {
				$item = $ing["item"];
				if(strpos($item, ",")) {
					$item = strstr($item, ",", true);
				}
				if(in_array($item."s", $ingredients)) {
					$item .= "s";
				} else if (in_array(substr($item,0,-1), $ingredients)) {
					$item = substr($item,0,-1);
				}
				$ingredients[$item] = [
					$ing["amount"],
					$ing["measure"]
				];
			}
		}
		return $ingredients;
	}

	public function filterById($id) {
		return $this->recipes[$id];
	}
}