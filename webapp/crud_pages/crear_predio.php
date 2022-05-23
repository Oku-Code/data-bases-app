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
                <h2>Crear un pedido</h2>
                <p>Ingresa los datos correspondientes a la creaciòn de un pedido</p>
           </div>
            <article class="admin"> 
                <form class="crud-create" action="crear_pedido.php" method="POST">
                    <label for="id">Identificaciòn</label>
                    <input type="text" name="id" placeholder="Inserta el ID del predio" required value="<?php echo !empty($id)?$id:'';?>">
                    <label for="id">Direcciòn del predio</label>
                    <input type="text" name="dir" placeholder="Inserta la direcciòn del predio" required value="<?php echo !empty($dir) ? $dir: '';?>">
                    <label for="id">Estrato del predio</label>
                    <input type="text" name="est" placeholder="Inserta la direcciòn del predio" required value="<?php echo !empty($est) ? $est: '';?>">
                    <button type="submit" class="create-btn create">Crear</button>
                    <a class="back" href="../pages/predio.php">Volver a la pagina principal </a>
                </form>
            </article> 
        </section>    
    </main>
</body>
</html>

<?php
    require 'conexion.php';

    if (!empty($_POST)) {
        $idError = null;
        $dirError = null;
        $estError = null;
         
        $id = $_POST['id'];
        $dir = $_POST['dir'];
        $est = $_POST['est'];
         
        $valid = true;
        if (empty($id)) {
            $idError = 'Por favor ingrese el ID';
            $valid = false;
        }
         
        if (empty($dir)) {
            $dirError = 'Por favor ingrese la dirección';
            $valid = false;
        } 
         
        if (empty($est)) {
            $estError = 'Por favor ingrese el estrato';
            $valid = false;
        }
         
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO predio (ide_pre,dir_pre,est_pre) values(?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($id,$dir,$est));
            Database::disconnect();
            header("Location: predio.php");
        }
    }
?>
