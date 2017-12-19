# Object Oriented PHP sample
A PHP Cookbook

<h2>Basic Usage</h2>
<p>list all recipes with corresponding id<br/>
<code>echo Render::listRecipes($cookbook->getRecipeTitles());</code></p>
<p>display recipe by id<br/>
<code>echo Render::displayRecipe($cookbook->filterById(7));</code></p>
<p>add new collection, and display filtered by tag<br/>
<code>
$breakfast = new RecipeCollection("Breakfast foods");

foreach ($cookbook->filterByTag("breakfast") as $recipe) {
	$breakfast->addRecipe($recipe);
}

echo Render::listRecipes($breakfast->getRecipeTitles());
</code></p>
<p>Display shopping list of ingredients for "Breakfast" Collection<br />
<code>echo Render::listShopping($breakfast->getCombinedIngredients());</code></p>
