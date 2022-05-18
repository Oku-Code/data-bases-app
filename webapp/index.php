<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bases de datos</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main>
        <header>
            <div class="title">
                <h2>Bases de datos</h2>
            </div> 
            <div class="nicks">
                <a href="#">Oku</a>
                <a href="#">MacheWD</a>
            </div>
        </header>
        <section>
            <article>
                <h1>Bienvenido</h1>
                <p>Por favor ingrese sus credenciales para continuar</p>
                <form action="pages/connect.php" method="POST">
                    <label for="server">Sever</label>
                    <input type="text" required name="server" placeholder="Nombre del servidor">
                    <label for="user">Usuario</label>
                    <input type="text" required name="user" placeholder="Escribe tu nombre de usuario">
                    <label for="password">Contraseña</label>
                    <input type="password" required name="password" placeholder="Escribe tu contraseña">
                    <button type="submit" name="submit-btn">Entrar</button>
                </form>
                <small>Previamente el administrador, debio crear el usuario dentro de la base de datos</small>
            </article>
        </section>    
    </main>
</body>
</html>
