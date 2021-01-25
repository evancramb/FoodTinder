<!DOCTYPE html>
<html>
<head>
<title>FoodTinder</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&display=swap" rel="stylesheet">
<script>
var listStarted = false;
var currentItem = "";

</script>
</head>
<script>
function newCard(){
let foods = ['Baked Italian sandwiches','Baked ziti', 'BBQ chicken salad', 'Beef & broccoli', 'Beef or pork tenderloin', 'BLT', 'Bolognese sauce and pasta', 'Bowtie pasta & vegetables', 'Breaded chicken', 'Burgers or hotdogs', 'Burritos', 'Cafe Rio pork salads or burritos', 'Calzones', 'Cheeseburger soup', 'Cheesy bacon chicken', 'Chicken and broccoli casserole', 'Chicken and rice', 'Chicken cordon bleu', 'Chicken enchiladatortilla soup', 'Chicken fingers', 'Chicken noodle soup', 'Chicken nuggets', 'Chicken parmesan', 'Chicken pot pie', 'Chicken wings', 'Chimichangas', 'Cilantro-lime chicken', 'Clam chowder', 'Club salad ', 'Corn chowder', 'Crab cakes', 'Creamy potato soup', 'Crockpot Alfredo lasagna', 'Crockpot salsa chicken', 'Dijon chicken', 'Dr Pepper pulled pork sandwiches', 'Egg rolls', 'Eggplant parmesan', 'Enchiladas', 'Fajitas', 'Fettuccine Alfredo', 'Fish n chips', 'Fish sticks', 'Fish tacos', 'French bread pizza', 'French dip sandwiches', 'French onion soup', 'Fried chicken', 'Grilled cheese sandwiches', 'Grilled chicken', 'Ham', 'Hard tacos or tostadas', 'Homemade corn dogs', 'Homemade mac n cheese', 'Homemade pizza', 'Huevos rancheros', 'Italian wedding soup', 'Jambalaya', 'Kabobs', 'KFC bowls', 'Lasagna', 'Lasagna rolls', 'Lemon chicken ', 'Manicotti', 'Meatball subs', 'Meatballs and rice', 'Meatloaf', 'Mexican chicken sandwiches', 'Minestrone soup', 'Orange chicken', 'Pad Thai', 'Paninis', 'Pesto pasta', 'Pork chops', 'Pot roast', 'Pulled BBQ chicken', 'Quesadillas', 'Ribs', 'Rotini bake', 'Salmon', 'Salmon patties', 'Sausage & pepper pasta', 'Shepherds pie', 'Sloppy Joes', 'Smoked salmon bagel', 'Spaghetti and meatballs', 'Spinach-bacon mac N cheese', 'Steak', 'Stir fry', 'Stroganoff (chicken or beef)', 'Stuffed green peppers', 'Stuffed pasta shells', 'Stuffed pork chops', 'Taco salad', 'Taco soup', 'Tomato bisque', 'Tomato-bacon pasta', 'Tortellini', 'Tortellini soup', 'Tostadas', 'Twice-baked potatoes', 'Vegetable lasagna', 'White chicken chili'];
var randFoodItem = foods[Math.floor(Math.random() * foods.length)];
currentItem = randFoodItem;
document.getElementById("card").innerHTML = "<p>"+randFoodItem+"</p>";
}

function acceptCard(){
//alert("Recipe added to grocery list!");
if(!listStarted){
listStarted = true;
document.getElementById("groceryListDiv").setAttribute("style","display:block;");
document.getElementById("metaContainer").setAttribute("style","width:705px;");
}
document.getElementById("groceryList").innerHTML += "<li>" + currentItem + "</li>";
newCard()
}

function startOver(){
listStarted = false
document.getElementById("groceryListDiv").setAttribute("style","display:none;")
document.getElementById("metaContainer").setAttribute("style","width:375px;")
document.getElementById("groceryList").innerHTML = "";
newCard()
}

</script>
<body onLoad="newCard()">
<div style="width:100%;text-align:left;">
<a href="../">Back to other projects</a>
</div><!-- end menu div -->
<div id="metaContainer">
<div id="container">
<div id="header">
<img src="logo.png">
</div><!-- End header-->
<div id="card">
</div><!-- End card -->
<input type="button" value="Skip" id="skip" name="skip" class="button" onClick="newCard()">
<input type="button" value="I'll take it." id="accept" name="accept" class="button" onClick="acceptCard()">

</div><!--End container -->

<div id="groceryListDiv" style="display:none;" overflow="scroll">
<strong>Recipe List</strong><br>
<a style="font-family:'Arial';color:blue;font-size:12px;" href="#">When finished, click here to get shopping list.</a>
<ul id="groceryList">
</ul>
<a style="font-family:'Arial';color:#dddddd;font-size:12px;" href="#" OnClick="startOver()">Click here to start over.</a>
</div><!-- end grocery list div -->

</div><!-- end metaContainer -->

</body>
</html>