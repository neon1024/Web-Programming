$(document).ready(function () {
    function refresh() {
        let type = $("#type").val();
        let name = $("#name").val();

        $.getJSON(
            "../scripts/showRecipes.php",
            { type: type, name: name },
            function (json) {
                $("table tbody").empty();

                json.forEach(function (recipe) {
                    $("table tbody").append(`<tr>
                                <td>${recipe.author}</td>
                                <td>${recipe.name}</td>
                                <td>${recipe.type}</td>
                                <td>${recipe.description}</td>
                                <td>
                                    <a href="../scripts/updateRecipe.php?id=${recipe.recipeID}">Update</a>
                                    <br>
                                    <a href="../scripts/deleteRecipeBackend.php?id=${recipe.recipeID}">Delete</a>
                                    <br>
                                </td>
                               </tr>`);
                });
            }
        );

        $("#info").text(
            `The query has been done with the type "${type}" and the name "${name}"`
        );
    }

    $("#type, #name").change(function () {
        refresh();
    });

    refresh();
});
