
// LOGIN
$(document).ready(function() {
    $('#pwdForm').submit(function(e) {
    var usr = document.getElementById("usr").value;
    var pwd = document.getElementById("pwd").value;

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: 'prcd/login.php',
        dataType:'json',
        data: {
            usr:usr,
            pwd:pwd
        },
          /* data: $(this).serialize(), */
        success: function(response)
        {
            // var jsonData = JSON.parse(response);
            var jsonData = JSON.parse(JSON.stringify(response));

            // user is logged in successfully in the back-end
            // let's redirect
            if (jsonData.success == "1")
            {
                var icon = "x";
                var title = "x";
                var body = "x";
                
                Push.Permission.request();

                Push.create('Me das ammmmmsiedad!', {
                    body: 'Hola AnnY.',
                    icon: 'icon.png',
                    timeout: 8000,               // Timeout before notification closes automatically.
                    vibrate: [100, 100, 100],    // An array of vibration pulses for mobile devices.
                    onClick: function() {
                        // Callback for when the notification is clicked. 
                        console.log(this);
                    }  
                });

                console.log(jsonData.error);
                var usr= jsonData.usr;
                var pwd= jsonData.pwd;
                console.log(jsonData.usr);
                console.log(jsonData.pwd);
                Swal.fire({
                    icon: 'success',
                    imageUrl: 'img/Logo.png',
                    imageHeight: 200,
                    title: 'Usuario correcto',
                    text: 'Credenciales correctas',
                    confirmButtonColor: '#3085d6',
                    footer: 'INCLUSIÓN'
                }).then(function(){window.location='busqueda.php?usr='+usr+'&pwd='+pwd;});
            }
            else
            {
                console.log(jsonData.error);
                Swal.fire({
                    icon: 'error',
                    title: 'Datos incorrectos',
                    text: 'Credenciales incorrectas',
                    confirmButtonColor: '#3085d6',
                    footer: 'INJUVENTUD'
                }).then(function(){window.location='login.html';});
                // });
            }
    }
});
});
});