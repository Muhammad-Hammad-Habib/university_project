$(document).ready(function () {
    let path = "/project/functions/php";

    $.validator.addMethod("strongPassword", function (value) {
        return /(?=^.{10,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/.test(value);
    }, "Password (UpperCase, LowerCase, Number/SpecialChar and minimum 10 Chars)");

    $.validator.addMethod("noSpace", function (value, element) {
        return value.indexOf(" ") < 0 && value != "";
    }, "No space please and don't leave it empty");

    $("#createAccount").validate({
        rules: {
            full_name: {
                required: true,
            },
            email: {
                required: true,
                email: true,
                noSpace: true
            },
            password: {
                required: true,
                // strongPassword : true
            },
            confirmPassword: {
                required: true,
                equalTo: "#password"
            },
        },

        highlight: function (element) {
            $(element).addClass("hilighty")
        },
        unhighlight: function (element) {
            $(element).removeClass("hilighty")
        },

        messages: {
            full_name: {
                required: "Please enter the name",
            },
            email: {
                required: "Please enter the email",
                email: "Please enter the valid email",
                noSpace: "Please enter the valid email"
            },
            password: {
                required: "please enter the password",
            },
            confirmPassword: {
                required: "please enter the mandatory",
                equalTo: "Please enter the same password"
            },
        },

        submitHandler: function (form) {
            let email = $("#email").val();
            $.ajax({
                url: path + "/checkEmail.php",
                type: "POST",
                data: { email: email },
                // dataType: "JSON",
                success: function (response) {
                    if (response >= 1) {
                        $("#done").fadeIn(1000).text(email + " Oops this email already exist ");
                        $("#done").fadeOut(4000);
                    }
                    else {
                        $.ajax({
                            url: path + "/createUser.php",
                            type: "POST",
                            data: $("#createAccount").serialize(),
                            success: function (response) {
                                if (response) {
                                    $("#done").fadeIn(1000).text("Login with your email");
                                    $("#done").fadeOut(4000);
                                    $("#createAccount").trigger("reset")
                                }
                                else {
                                    $("#done").fadeIn(1000).text("some thing went wrong");
                                    $("#done").fadeOut(4000);
                                }
                            },
                        })
                    }
                },
            })
        },
    });

    $("#signIn").on("click", function (e) {
        e.preventDefault();
        console.log("Hello World")
        $.ajax({
            url: path + "/checkUser.php",
            type: "POST",
            data: $("#checkUserForm").serialize(),
            success: function (response) {
                if (response == "1") {
                    console.log("Hello DOne")
                    $("#ok").fadeIn(1000).text("user exsixt");
                    $("#ok").fadeOut(4000);
                    window.location.replace("userPanel/")
                }
                else {
                    console.log("Hello error")
                    $("#ok").fadeIn(1000).text("Email or password does not exsist");
                    $("#ok").fadeOut(4000);
                }
            },
        })
    });
});
