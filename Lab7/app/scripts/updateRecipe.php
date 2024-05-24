<?php
require_once "../utils/configuration.php";
global $connection;
$id = "";
$author = "";
$name = "";
$type = "";
$description = "";
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id']) && !empty(trim($_GET['id']))) { //i modified this line
    $id = trim($_GET['id']);
    $sql_query = "select * from recipes where recipeID = $id";
    $result = mysqli_query($connection, $sql_query);
    if ($result) {
        $number_of_rows = mysqli_num_rows($result);
        if ($number_of_rows == 1) {
            $row = mysqli_fetch_array($result);
            $author = $row['author'];
            $name = $row['name'];
            $type = $row['type'];
            $description = $row['description'];
        } else {
            die("Incorrect recipe id");
        }
    } else {
        die("Oops! Something went wrong and your document cannot be updated! Please try again later.");
    }
    mysqli_close($connection);
} else die("Oops! Something went wrong and your document cannot be updated! Please try again later.");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Recipe</title>
    <style>
        <?php include "../styles/addRecipe.css" ?>
    </style>
</head>

<body>
<div class="container">
    <h1>Update Recipe</h1>
    <p><b>Please fill this form and submit to update the recipe in the database.</b></p>

    <form action="../scripts/updateRecipeBackend.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <input type="text" name="author" placeholder="Author:" value="<?php echo $author ?>"> <br>
        <input type="text" name="name" placeholder="Name:" value="<?php echo $name ?>"> <br>
        <input type="text" name="type" placeholder="Type:" value="<?php echo $type ?>"> <br>
        <input type="text" name="description" placeholder="Description:" value="<?php echo $description ?>"> <br>
        <div class="button_container">
            <button type="submit">Update Recipe</button>
            <button type="reset" onclick="window.location.href='../pages/showRecipes.html'">Cancel</button>
        </div>
    </form>
</div>
</body>

</html>