<?php
require_once '../utils/configuration.php';

global $connection;

$sql_query = "SELECT * FROM recipes;";
$result = mysqli_query($connection, $sql_query);

if ($result) {
    $number_of_rows = mysqli_num_rows($result);
    $requested_recipes = array();

    $type = isset($_GET["type"]) ? $_GET["type"] : '';
    $name = isset($_GET["name"]) ? $_GET["name"] : '';

    for ($i = 0; $i < $number_of_rows; $i++) {
        $row = mysqli_fetch_array($result);

       if (!empty($type) && !empty($name) && strpos($row["type"], $type) !== false && strpos($row["name"], $name) !== false) {
           array_push($requested_recipes, array(
               'recipeID' => $row['recipeID'],
               'author' => $row['author'],
               'name' => $row['name'],
               'type' => $row['type'],
               'description' => $row['description']
           ));
       }

    }

    mysqli_free_result($result);
    echo json_encode($requested_recipes);
} else {
    echo json_encode(array("error" => "Query failed: " . mysqli_error($connection)));
}

mysqli_close($connection);
