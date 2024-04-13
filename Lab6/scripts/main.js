$(document).ready(() => {
    $("#car-form-submit__button--main").click(function () {
        $("#transparency__div").css("display", "block");
        $("#car-form--second").css("display", "flex");
        $("#input-1--main").attr("disabled", "disabled");
        $("#input-2--main").attr("disabled", "disabled");
        $("#input-3--main").attr("disabled", "disabled");
        $("#input-4--main").attr("disabled", "disabled");
        $("#input-5--main").attr("disabled", "disabled");
        $("#input-6--main").attr("disabled", "disabled");
    });

    $("#car-form-submit__button--second").click(function () {
        $("#transparency__div").css("display", "none");
        $("#car-form--second").css("display", "none");
        $("#input-1--main").removeAttr("disabled");
        $("#input-2--main").removeAttr("disabled");
        $("#input-3--main").removeAttr("disabled");
        $("#input-4--main").removeAttr("disabled");
        $("#input-5--main").removeAttr("disabled");
        $("#input-6--main").removeAttr("disabled").val(
            $("#input-1").val() +
            $("#input-2").val() +
            $("#input-3").val() +
            $("#input-4").val()
        );
    });
});