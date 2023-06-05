$(document).ready(function () {
    // login ajax
    $('#form-login').submit(function (e) {
        e.preventDefault();
        var data = $(this).serialize();
        $.ajax({
            url: 'login.php',
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function (response) {
                const obj = JSON.parse(response);
                if (obj.status == 'success') {
                    window.location.href = 'index.php';
                }else{
                    alert(obj.message);
                }
            }
        });
    });

    // register ajax
    $('#form-register').submit(function (e) {
        e.preventDefault();
        var data = $(this).serialize();
        $.ajax({
            url: 'register.php',
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function (response) {
                const obj = JSON.parse(response);
                if (obj.status == 'success') {
                    window.location.href = 'index.php';
                }else{
                    alert(obj.message);
                }
            }
        });
    });
});