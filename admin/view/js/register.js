$(document).ready(function() {

    $("#form_Login").validate({
        rules: {

            username: {
                required: true,
            },
            password: {
                required: true,
            }
        },
        messages: {

            username: "<span>" + "<em>" + "</em>" + "Vui lòng tên tài khoản của bạn" + "</span>",
            password: "<span>" + "<em>" + "</em>" + "Vui lòng nhập mật khẩu của bạn" + "</span>",

        }

    });
    $("#form_Register").validate({
        rules: {

            username: {
                required: true,
            },
            password: {
                required: true,
            },
            password2: {
                required: true,
            }
        },
        messages: {

            username: "<span>" + "<em>" + "</em>" + "Vui lòng tên tài khoản của bạn" + "</span>",
            password: "<span>" + "<em>" + "</em>" + "Vui lòng nhập mật khẩu của bạn" + "</span>",
            password2: "<span>" + "<em>" + "</em>" + "Vui lòng nhập mật khẩu của bạn" + "</span>",
        }

    });
});