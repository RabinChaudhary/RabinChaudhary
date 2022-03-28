jQuery(function () {
    $("#login").on("click", function () {
        var email = $("#email").val();
        var password = $("#password").val();

        var regex =
            /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (regex.test(email) && password !== "") {
        } else {
            $(".error-msg").text("Email or password cannot be empty.");
            return false;
        }
    });
});
