<?php
include_once 'header.php';
$_SESSION['recipe'] = 'meatballs';
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Meatballs</title>
    </head>
    <body>
        <div class="Food-image">
        <img src="../resources/img/swedishmeatball.jpg" alt="Plate of meatballs">
        </div>
        <div class="Food-header">
            <h2> Swedish Meatballs </h2>
            <p>Swedish Meatballs Recipe - Swedish meatballs make a delicious 
                dish served as an appetizer or as a main meal. This family 
                meatballs recipe is made from scratch and is a favorite!</p>
        </div>
        <hr>
        <div class="recipe">
            <h2>Ingredients</h2>
            <h3>For the meatballs:</h3>
            <ul>
                <li>1 pound lean ground beef</li>
                <li>2 cloves garlic, chopped</li>
                <li>2 tablespoons diced onion</li>
                <li>1 egg</li>
                <li>&frac12; teaspoon salt</li>
                <li>&frac12; teaspoon ground black pepper</li>
                <li>2 tablespoons bread or cracker crumbs</li>
                <li>2 tablespoons chopped fresh parsley (optional)</li>
                <li>olive oil</li>         
            </ul>
            <h3>For the sauce:</h3>
            <ul>
                <li>2 tablespoons butter</li>
                <li>3 tablespoons all-purpose flour</li>
                <li>2 cups beef broth</li>
                <li>1 cup whole milk or heavy cream</li>
                <li>2 teaspoons Worcestershire sauce</li>
                <li>1 teaspoon salt</li>
                <li>&frac12; teaspoon fresh ground black pepper</li>
                <li>2 tablespoons chopped fresh parsley (optional)</li>       
            </ul>
            <h2>Directions</h2>
            <h3>For the meatballs:</h3>
            <ol>
                <li>Mix together all ingredients for the meatballs. Set aside.</li>
                <li>Using a tablespoon scoop or spoon, form meatballs from 
                    the ground beef mixture. Heat 12-inch skillet or saute<br> 
                    pan over medium heat. Drizzle in enough olive oil to 
                    lightly coat the bottom of the skillet to prevent <br>
                    meatballs from sticking. Drop formed meatballs into the 
                    heated skillet, turning occasionally to ensure that all<br>
                    sides of the meatball have been browned, about 7-10 minutes. 
                    Remove the meatballs from the skillet or saute pan and<br>
                    drain on a plate lined with paper towels.</li>
            </ol>
            <h3>For the sauce:</h3>
            <ol>
                <li>Reduce the heat on the skillet or saute pan to<br> 
                    medium-low heat. Melt butter and whisk in flour until it 
                    has turned golden brown. Slowly whisk in beef broth and <br>
                    cook until thickened, then add in milk or cream, 
                    worcestershire sauce, pepper, and salt. Continue to stir <br>
                    until well-combined. Add meatballs back into the skillet, 
                    turning to coat well. Add fresh parsley, if using.</li>
            </ol>
        </div>
        <br>
        <?php
        include_once 'comments_meatballs.php'; ?>
    </body>
</html>

