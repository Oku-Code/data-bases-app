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
               <a href="../crud_pages/crear_predio.php">Crear</a>
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
                           include '../conexion.php';
                           $pdo = Database::connect();
                           $sql = 'SELECT * FROM predio ORDER BY ide_pre;';

                           foreach ($pdo->query($sql) as $row){
                               echo '<tr>';
                               echo '<td>'. $row['ide_pre'] . '</td>';
                               echo '<td>'. $row['est_pre'] . '</td>';
                               echo '<td>'. $row['dir_pre'] . '</td>';
                               echo '<td><a href="../crud_pages/leer_predio.php?id='.$row['ide_pre'].'"><button type="button" class="read-btn">Leer</button></a></td>';
                               echo '<td><a href="../crud_pages/actualizar_predio.php?id='.$row['ide_pre'].'"><button type="button" class="up-btn">Actualizar</button></a></td>';
                               echo '<td><a href="../crud_pages/eliminar_predio.php?id='.$row['ide_pre'].'"><button type="button" class="delete-btn">Eliminar</button></a></td>';
                               echo '</tr>';
                           }
                        ?>
                    </tbody>
                </table>
            </article>
            <small class="alerts">Las tablas deben estar presentes en la base de datos !!!</small>
            <a class="back" href="../admin.php">Volver a la pagina principal </a>
        </section>    
    </main>
</body>
</html>
