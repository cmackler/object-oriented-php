<?php
//Renders to page
class Render {
	//function thats displays and formats the ingredients
	public static function listIngredients($ingredients) {
		$output = "";
		foreach ($ingredients as $ing) {
			$output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
			$output .= "<br/>";
		};
		return $output;
	}

	//renders recipe list 
	public static function listRecipes($titlesOfRecipes) {
		asort($titlesOfRecipes);
		$output = "";
		foreach ($titlesOfRecipes as $key => $title) {
			if($output != "") {
				$output .= "<br/>";
			}
			$output .= "[$key] $title";
		}
		return $output;
	}

	//function to display recipe
	public static function displayRecipe($recipe) {
		$output = "";
		$output .= $recipe->getTitle() . " by " . $recipe->getSource() . "<br/>";
		$output .= "Tags: " . implode(", ", $recipe->getTags()) . "<br/><br/>";
		$output .= "Ingredients:<br/>";
		$output .= self::listIngredients($recipe->getIngredients());
		$output .= "<br/>";
		$output .= "Instructions:<br/>";
		$output .= implode("<br/><br/>", $recipe->instructions) . "<br/><br/>";
		$output .= $recipe->getYield();

		return $output;
	}

	public static function listShopping($ingredient_list) {
		ksort($ingredient_list);
		return implode("<br/>",array_keys($ingredient_list));
	}
}