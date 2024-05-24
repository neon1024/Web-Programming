<?php
require_once "../utils/configuration.php";
global $connection;

// if (isset($_POST['id']) && !empty(trim($_POST['id']))) {
// $id = $_POST['id']; aici ai facut un post si am creat eu o metoda mai jos unde am apelat printr-un request de tip get

if(isset($_GET['id']) && !empty($_GET['id'])) {
    // Parametrul "id" există în URL și nu este gol
    $id = $_GET['id'];
    echo "Parametrul 'id' este: $id";

    $stmt = $connection->prepare("DELETE FROM recipes WHERE recipeID = ?");
    if ($stmt) {
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "Your recipe was deleted successfully!";
            header("Location: ../pages/showRecipes.html");
            exit();
        } else {
            echo "Oops! Something went wrong and your recipe cannot be deleted! Please try again later.";
        }

        $stmt->close();
    } else {
        echo "Error preparing query: " . $connection->error;
    }
} else {
    echo "No recipe ID provided.";
}

mysqli_close($connection);
