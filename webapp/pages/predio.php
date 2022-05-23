<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bases de datos</title>
    <link rel="stylesheet" href="../css/style.css">
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
                <h2>Bienvenido al crud de predio</h2>
                <p>Que quieres hacer hoy</p>
            <button class="create-btn create-query">
               <a href="#">Crear</a>
            </button>
           </div>
            <article class="admin"> 
                <table class="info">
                    <thead class="values">
                        <tr>
                            <th>Identificaciòn</th>
                            <th>Direcciòn</th>
                            <th>Estrato</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            echo '<tr>' 
                                echo '<button type="button" class="read-btn"><a href="../crud_pages/leer_predio.php?id='.$row['id'].'">Read</a></button>';
                                echo '<button type="button" class="up-btn"><a href="../crud_pages/actualizar_predio.php?id='.$row['id'].'">Update</a></button>';
                                echo '<button type="button" class="delete-btn"><a href="../crud_pages/eliminar_predio.php?id='.$row['id'].'">Delete</a></button>';
                            echo '</tr>'
                        ?>
                    </tbody>
                </table>
            </article>
            <small class="alerts">Las tablas deben estar presentes en la base de datos !!!</small>
        </section>    
    </main>
</body>
</html>
