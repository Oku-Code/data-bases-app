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
                <h2>Crear un contrato</h2>
                <p>Ingresa los datos correspondientes a la creaciòn de un contrato</p>
           </div>
            <article class="admin"> 
                <form class="crud-create" action="crear_contrato.php">
                    <label for="id">Numero de contrato</label>
                    <input type="text" name="id" placeholder="Inserta el numero de contrato" required>
                    <label for="id">Tipo de contrato</label>
                    <input type="text" name="id" placeholder="Inserta el tipo de contrato" required>
                    <label for="id">Vigencia del mes</label>
                    <input type="number" name="id" placeholder="" required>
                    <button type="submit" class="create-btn create">Crear</button>
                    <a class="back" href="../admin.php">Volver a la pagina principal </a>
                </form>
            </article> 
        </section>    
    </main>
</body>
</html>

<?php
    echo "Code here";
?>
