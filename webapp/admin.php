<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bases de datos</title>
    <link rel="stylesheet" href="css/style.css">
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
            <div class="title-two">
                <h2>Bienvenido Administrador</h2>
                <p>Que quieres hacer hoy</p>
           </div>
            <article class="admin"> 
                <table class="info">
                    <thead class="values">
                        <tr>
                            <th>Nombre de la tabla</th>
                            <th>Crud de la tabla</th>
                        </tr>
                        <tr>
                    </thead>
                    <tbody>
                            <th>Predio</th>
                            <th>
                                <a href="pages/predio.php">
                                    <button type="button" class="create-btn">Crud Predio</button>
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>Arrendador</th>
                            <th>
                                <a href="pages/arrendador.php">
                                    <button type="button" class="create-btn">Crud Arrendador</button>
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>Arrendatario</th>
                            <th>
                                <a href="pages/arrendatario.php">
                                    <button type="button" class="create-btn">Crud Arrendatario</button>
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>Comprador</th>
                            <th>
                                <a href="pages/comprador.php">
                                    <button type="button" class="create-btn">Crud Comprador</button>
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>Vendedor</th>
                            <th>
                                <a href="pages/vendedor.php">
                                    <button type="button" class="create-btn">Crud Vendedor</button>
                                </a>
                            </th>
                        </tr>
                    </tbody> 
                </table>
            </article>
        </section>    
    </main>
</body>
</html>

