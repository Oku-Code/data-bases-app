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
                <h2>Bienvenido al crud de arrendador</h2>
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
                            <th>Nombre</th>
                            <th>Correo Electronico</th>
                            <th>Telefono</th>
                            <th>Identificaciòn del predio</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php 
                            include '../conexion.php';
                            $pdo = 'SELECT * FROM arrendador ORDER BY ide_ard;';
                            foreach ($pdo->query($sql) as $row){
                                echo '<tr>';
                                echo '<td>'. $row['ide_ard'] . '</td>';
                                echo '<td>'. $row['nom_ard'] . '</td>';
                                echo '<td>'. $row['email_ard'] . '</td>';
                                echo '<td>'. $row['tel_ard'] . '</td>';
                                echo '<td>'. $row['ide_pre'] . '</td>';
                                echo '<td><a href="../crud_pages/leer_predio.php?id='.$row['ide_ard'].'"><button type="button" class="read-btn">Leer</button></a></td>';
                                echo '<td><a href="../crud_pages/actualizar_predio.php?id='.$row['ide_ard'].'"><button type="button" class="up-btn">Actualizar</button></a></td>';
                                echo '<td><a href="../crud_pages/eliminar_predio.php?id='.$row['ide_ard'].'"><button type="button" class="delete-btn">Eliminar</button></a></td>';
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
