$(document).ready(function () {

    $('.form-log').on('submit', function (e) {
        e.preventDefault();
        console.log('click');
        var postData = $(this).serialize();
        var formURL = $(this).attr("action");
        $.ajax({
            url: formURL,
            data: postData,
            method: 'post',
            dataType: 'json',
            error: function () {
                alert('Error al iniciar sesion');
            },
            success: function (resp) {
                console.log(resp);
                window.location.href = resp.redirect;
            }
        });
        return false;
    });

    $('.form-reg').on('submit', function () {
        console.log('click');
        var postData = $(this).serialize();
        var formURL = $(this).attr("action");
        $.ajax({
            url: formURL,
            data: postData,
            method: 'post',
            dataType: 'json',
            error: function () {
                alert('Error de registro');
            },
            success: function (resp) {
                console.log(resp);
                window.location.href = resp.redirect;
            }
        });
        return false;
    });

    $('.form-out').on('submit', function () {
        console.log('click');
        var postData = $(this).serialize();
        var formURL = $(this).attr("action");
        $.ajax({
            url: formURL,
            data: postData,
            method: 'post',
            dataType: 'json',
            error: function () {
                alert('Error al salir');
            },
            success: function (resp) {
                console.log(resp);
                window.location.href = resp.redirect;
            }
        });
        return false;
    });

    $('.flex').on('submit', function () {
        console.log('click');
        var postData = $(this).serialize();
        var formURL = $(this).attr("action");
        $.ajax({
            url: formURL,
            data: postData,
            method: 'POST',
            dataType:'json',
            error: function () {
                alert('Error');
            },
            success: function (resp) {
                console.log(resp);
                showUsers();
            }
        });
        return false;
    });

    showUsers();

    function showUsers(){
        $.ajax({
            url:'dashboard/showUsers',
            method:'POST',
            dataType:'json',
            error: function () {
                alert("Error");
            },
            success:function(respuesta){
                var data = JSON.stringify(respuesta);
                data = JSON.parse(data);
                $("#showUsersDiv").html("<table><tbody><tr><th>ID</th><th>Usuario</th><th>Nombre</th><th>Apellido</th><th>Contraseña</th><th>Email</th><th>Pais</th><th>Rol</th></tr>"); 
                for(i=0;i<data.length;i++){ 
                    $("#showUsersDiv table").append("<tr><td>"+data[i].id+"</td><td>"+data[i].username+"</td><td>"+data[i].name+"</td><td>"+data[i].lastname+"</td><td>"+data[i].password+"</td><td>"+data[i].email+"</td><td>"+data[i].country+"</td><td>"+data[i].rol+"</td></tr>");
                }
                $("#showUsersDiv table").append("</tbody></table>").appendTo('#showUsersDiv');
            }
        });
    }
});
