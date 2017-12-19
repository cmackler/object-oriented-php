<?php 
	include "classes/recipe.php";
	include "classes/render.php";
	include "inc/allrecipes.php";
	include "classes/recipecollection.php";

	$cookbook = new RecipeCollection("My Cookbook");
	$cookbook->addRecipe($lemon_chicken);
	$cookbook->addRecipe($granola_muffins);
	$cookbook->addRecipe($belgian_waffles);
	$cookbook->addRecipe($pepper_casserole);
	$cookbook->addRecipe($lasagna);
	$cookbook->addRecipe($dried_mushroom_ragout);
	$cookbook->addRecipe($rabbit_catalan);
	$cookbook->addRecipe($grilled_salmon_with_fennel);
	$cookbook->addRecipe($pistachio_duck);
	$cookbook->addRecipe($chili_pork);
	$cookbook->addRecipe($crab_cakes);
	$cookbook->addRecipe($beef_medallions);
	$cookbook->addRecipe($silver_dollar_cakes);
	$cookbook->addRecipe($french_toast);
	$cookbook->addRecipe($corn_beef_hash);
	$cookbook->addRecipe($granola);
	$cookbook->addRecipe($spicy_omelette);
	$cookbook->addRecipe($scones);
	
	/*
	//*new collection, filtered by tag
	$breakfast = new RecipeCollection("Breakfast foods");
	foreach ($cookbook->filterByTag("breakfast") as $recipe) {
		$breakfast->addRecipe($recipe);
	}	
	//*Display collection filtered by tag
	//echo Render::listRecipes($breakfast->getRecipeTitles());
	//*Display shopping list of ingredients for "Breakfast" Collection
	//echo Render::listShopping($breakfast->getCombinedIngredients());
	*/

	
	//*Displays list of all recipes with corresponding id
	echo Render::listRecipes($cookbook->getRecipeTitles());
	

	
	//*Display Recipe by id
	//echo Render::displayRecipe($cookbook->filterById(7));
	

