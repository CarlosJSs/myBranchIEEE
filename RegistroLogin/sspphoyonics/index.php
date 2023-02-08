<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome AES-IEEE</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ae67df2373.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/login_estilos.css">
</head>
<body>
    <div class="login_caja">
        <h2>Iniciar sesión</h2>
        <form action="">
            <div class="login_input-caja login_input-correo">
                <i class="fa-regular fa-envelope login_myicono"></i>
                <input 
                    class="login_myinput"
                    type="text"
                    name="login_input-correo"
                    required>
                <label class="login_input-etiqueta" for="login_input-correo">Correo Electrónico</label>
            </div>
            <div class="login_input-caja login_input-contra">
                <i class="fa-solid fa-key login_myicono"></i>
                <input 
                    type="password"
                    name="login_input-contra"
                    required>
                <label class="login_input-etiqueta" for="login_input-contra">Contraseña</label>
            </div>
            <div class="login_boton">
                <a id="login_boton-entrar" href="#">Entrar</a>
                <div id="login_olvide-contra">
                    ¿Olvidaste tu contraseña?
                    <a href="#">Click aqui</a>
                </div>
            </div>
        </form>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>
