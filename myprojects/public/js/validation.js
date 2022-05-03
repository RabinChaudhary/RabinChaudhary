jQuery(function () {
    //for login form validation
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

    //for registration form validation

    $("#reg_submit").on("click", function () {
        var firstName = $("#first_name").val();
        var lastName = $("#last_name").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var confirmPassword = $("#confirm_password").val();
        var mobile = $("#mobile").val();
        var gender = $("#gender").val();
        var regex =
            /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var mobile_length = $("#mobile").val().length;
        var password_length = $("#password").val().length;

        if (
            regex.test(email) &&
            password &&
            firstName &&
            lastName &&
            confirmPassword &&
            mobile &&
            gender !== ""
        ) {
        } else if (firstName == "") {
            $(".error-msg").text("First Name cannot be empty.");
            return false;
        } else if (lastName == "") {
            $(".error-msg").text("Your lastName is empty");
            return false;
        } else if (email == "") {
            $(".error-msg").text("Your email is empty or invalid.");
            return false;
        } else if (password == "" || password_length < 6) {
            $(".error-msg").text(
                "Your password is empty or less than six letters."
            );
            return false;
        } else if (password !== confirmPassword) {
            $(".error-msg").text(
                "Your password is not matching with confirm_password"
            );
            return false;
        } else if (mobile == "" || mobile_length < 10) {
            $(".error-msg").text(
                "Your mobile number is empty or should be length of 10"
            );
            return false;
        }
    });
    
    //for update form validation

    $("#update_submit").on("click", function () {
        var firstName = $("#first_name").val();
        var lastName = $("#last_name").val();
        var email = $("#email").val();
        var mobile = $("#mobile").val();
        var gender = $("#gender").val();
        var regex =
            /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var mobile_length = $("#mobile").val().length;

        if (
            regex.test(email) &&
            firstName &&
            lastName &&
            mobile &&
            gender !== ""
        ) {
        } else if (firstName == "") {
            $(".error-msg").text("First Name cannot be empty.");
            return false;
        } else if (lastName == "") {
            $(".error-msg").text("Your lastName is empty");
            return false;
        } else if (email == "" ) {
            $(".error-msg").text("Your email is empty or invalid.");
            return false;
        } else if (mobile == "" || mobile_length < 10) {
            $(".error-msg").text(
                "Your mobile number is empty or should be length of 10"
            );
            return false;
        }
    });
});
