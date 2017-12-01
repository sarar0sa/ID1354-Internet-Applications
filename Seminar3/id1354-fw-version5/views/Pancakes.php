<?php
include_once 'header.php';
$_SESSION['recipe'] = 'pancakes';
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Pancakes</title>
    </head>
    <body>
        <div class="Food-image">
        <img src="../../resources/img/pancakes-2801960_640.jpg" alt="Plate of pancakes">
        </div>
         <div class="Food-header">
            <h2> Pancakes </h2>
            <p>These pancakes are light and fluffy and made completely from scratch. 
                They’re not too sweet and are scented with vanilla, making them
                extra delicious. These are easy to adapt — try adding a handful
                of berries, nuts or chocolate to the batter.</p>
        </div>
        <hr>
        <div class="recipe">
            <h2>Ingredients</h2>
            <h3>For the batter:</h3>
            <ul>
                <li>1 &frac12; cups (195 grams) all-purpose flour</li>
                <li>2 tablespoons sugar</li>
                <li>1 tablespoon baking powder</li>
                <li>&frac34; teaspoon kosher salt</li>
                <li>1 &frac14; cups (295 ml) milk, dairy and non-dairy both will work</li>
                <li>1 large egg</li>
                <li>4 tablespoons butter, melted, plus more for skillet</li>
                <li>1 teaspoon vanilla extract</li>
                
            </ul>
            
            <h2>Directions</h2>
            <h3>Make batter:</h3>
            <ol>
                <li>Whisk flour, sugar, baking powder and the salt in a medium bowl.</li>
                <li>Warm milk in microwave or on top of stove until lukewarm,<br> 
                    not hot (you should be able to keep your 
                    finger submerged for 10 seconds).</li>
                <li>Whisk milk, egg, melted butter and the vanilla extract
                    until combined. <br> (By warming the milk slightly,
                    the melted butter mixes into the milk instead of 
                    turning into small lumps).</li>
            </ol>
            <h3>Cook pancakes:</h3>
            <ol>
                <li>Heat a large skillet (or use griddle) over medium heat. 
                    The pan is ready if when you splatter a little<br>
                    water onto the pan surface, 
                    the water dances around the pan and
                    eventually evaporates..</li>
                <li>Make a well in the center of the flour mixture, 
                    pour milk mixture into the well and use a fork to stir<br> 
                    until you no longer see clumps of flour. It is okay if 
                    the batter has small lumps, in fact you want that <br>
                    – it is important not to over-mix the batter.
                    Lightly brush skillet with melted butter. <br>
                    Use a 1/4-cup measuring cup to spoon batter onto skillet. 
                    Gently spread the batter into a 4-inch circle.</li>
                <li>When edges look dry and bubbles start to appear and pop on
                    the top surfaces of the pancake, turn over.<br> This takes 
                    about 2 minutes. Once flipped, cook another 1 to 2 minutes 
                    or until lightly browned and cooked<br> in the middle.
                    Serve immediately with warm syrup, butter and/or berries</li>
            </ol>
        </div>
       <br>
        <?php   
        include_once 'comments_pancake.php'; ?>
    </body>
</html>