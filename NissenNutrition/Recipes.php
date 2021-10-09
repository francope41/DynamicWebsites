<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/recipes.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>

<div class="grid-container">
    <div class="grid-item grid-logo"><a class="linkLogo" href="index.html"><img class="logo" src="images/NN LogoCropped.jpeg" alt="Logo"></a></div>
    <div class="grid-item"><a class="link" href="ContactUs.html">Contact Us</a></div>
    <div class="grid-item"><a class="link" href="Appointments.html">Appointments</a></div>  
    <div class="grid-item"><a class="link active" href="Recipes.php">Recipes</a></div>
    <div class="grid-item"><a class="link" href="AboutUs.html">About Us</a></div> 
</div>

<br>
<?php
	include 'includes/connection.php';

    if(isset($_GET["id"])) {
    $query = "SELECT * FROM recipes WHERE id=" . $_GET["id"];
    $result = mysqli_query($conn, $query);
    $recipe = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $ingredients = explode(';', $recipe['ingredients']);
    $instructions = explode(';', $recipe['instructions']);


    echo "<span class='recipe-title'>" . $recipe['title'] . "</span>";
    echo "<div class='recipe-details-body'>";
    echo "<span class='recipe-subtitle'>Ingredients</span>";

    echo "<ul>";
    foreach($ingredients as &$ingredient) {

    echo "<li>" . $ingredient ."</li>";

    }
    echo "</ul>";

    echo "<span class='recipe-subtitle'>Instructions</span>";

    echo "<ol>";
    foreach($instructions as &$instruction) {

    echo "<li>" . $instruction ."</li>";

    }
    echo "</ol>";

    echo "</div>";


    } else {

    echo "<span class='recipes-subtitle'>BREAKFAST</span>";
    echo "<div class='recipes-container'>";


	$query = "SELECT * FROM recipes";


	$results = mysqli_query($conn, $query);
    // The possible values for this parameter are the constants MYSQLI_ASSOC, MYSQLI_NUM, or MYSQLI_BOTH.

	while($database = mysqli_fetch_array($results, MYSQLI_ASSOC)) { //turns it into an array and assigns it to $database
        echo "<a class='recipe-link' href='?id=" . $database['id'] . "'><div class='recipe-container'><img src=" . $database['image'] . " alt='recipe-image'></img><span>" . $database['title'] . "</span></div></a>";
	}

	echo "</div>";

	}
	mysqli_close($conn);

?>

<div class="grid-bottom">
    <div class="grid-itemBot TakeAction"><h3 class="UnderLine">Take Action</h3>
		<a href="InPerson.html">In Person Appointment</a>
		<br>
		<a href="#Appointments-Online">Online Appointment</a>
	</div>

    <div class="grid-itemBot" style="margin-left: 30px"><h3 class="UnderLine">About Us</h3>
        <a href="#Us">Who We Are</a>
        <br>
        <a href="#FAQ">FAQs</a>
        <br>
        <a href="ContactUs.html">Contact</a>

    </div>
    <div class="grid-itemBot">
        <br>
        <br>
        <a href="https://www.instagram.com/nissennutrition/" class="fa fa-instagram"></a> <a href="#" class="fa fa-facebook"></a>
    </div> 
</div>


</body>
</html>
