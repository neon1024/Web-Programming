<?php
require_once "../utils/configuration.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") { // i added this line
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $recipeID = $_POST['id'];
        $author = $_POST['author'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        $description = $_POST['description'];

        $sql_query = "UPDATE recipes SET author='$author', name='$name', type='$type', description='$description' WHERE recipeID=$recipeID";
        //$sql_query = "update recipes set author='$author', name = '$name', type = '$type', description = `$description`, where recipeID = `$recipeID`";
        // in query ul tau ai o virgula inainte de where si ai folosit ghilimele inverse in loc de ghilimele simple

        global $connection;
        $result = mysqli_query($connection, $sql_query);

        if ($result) {
            echo "Your recipe was updated successfully!";
            header("Location: ../pages/showRecipes.html");
        } else {
            echo "Oops! Something went wrong and your document cannot be added! Please try again later.";
        }
    }
}

mysqli_close($connection);