<menu?php
require "../app/utils/configuration.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../app/styles/main.css">
    <link rel="icon" type="image/x-icon" href="../app/assets/images/page_icon.png">
    <title>Cooking Book</title>
</head>
<body>
    <main>
        <nav>
            <ol>
                <li>
                    <a href="../app/pages/addRecipe.html">Add Recipe</a>
                </li>
                <li>
                    <a href="../app/pages/showRecipes.html">Show Recipes</a>
                </li>
                <li>
                    <a href="../app/pages/deleteRecipe.html">Remove Recipe</a>
                </li>
                <li>
                    <a href="../app/pages/updateRecipe.html">Update Recipe</a>
                </li>
            </ol>
        </nav>
    <main>
</body>
</html>