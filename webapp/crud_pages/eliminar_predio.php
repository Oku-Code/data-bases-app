<?php 
    require 'conexion.php';

    if ( !empty($_GET['ide_pre'])) {
        $ide_pre = $_REQUEST['ide_pre'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $ide_pre = $_POST['ide_pre'];
         
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM predio  WHERE ide_pre = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($ide_pre));
        Database::disconnect();
        header("Location: predio.php");
         
    }
?>

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
                <h2>Eliminar un pedido</h2>
           </div>
            <article class="admin"> 
                <form class="crud-create" method="POST" action="eliminar.php">
                  <input type="hidden" name="ide_pre" value="<?php echo $ide_pre;?>"/>
                  <p> ¿ Seguro que desea eliminar este predio ?</p>
                  <button type="submit" class="delete-btn">Si</button>
                  <a href="crear_predio.php">NO</a> 
                </form>
            </article> 
        </section>    
    </main>
</body>
</html>