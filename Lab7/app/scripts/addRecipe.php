<?php
require_once "../utils/configuration.php";
$author = $_POST['author'];
$name = $_POST['name'];
$type = $_POST['type'];
$description = $_POST['description'];
$sql_query = "insert into recipes(author, name, type, description) values ('$author', '$name', '$type', '$description')";
global $connection;
$result = mysqli_query($connection, $sql_query);
if ($result) {
    echo "Your recipe was added successfully!";
    header("Location: ../pages/showRecipes.html");
} else {
    echo "Oops! Something went wrong and your document cannot be added! Please try again later.";
}
mysqli_close($connection);