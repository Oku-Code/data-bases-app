<?php 
    require '../conexion.php';

    $ide_pre = 0;

    if ( !empty($_GET['id'])) {
        $ide_pre = $_REQUEST['id'];
    }
     
    if ( !empty($_POST)) {
        $ide_pre = $_POST['ide_pre'];
         
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM predio  WHERE ide_pre = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($ide_pre));
        Database::disconnect();
        header("Location: ../pages/predio.php");
         
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
                <form class="crud-create" method="POST" action="eliminar_predio.php">
                  <input type="hidden" name="ide_pre" value="<?php echo $ide_pre;?>"/>
                  <p class="alert">¿ Seguro que desea eliminar este predio ?</p>
                  <button type="submit" class="delete-btn">Si</button>
                  <a href="../pages/predio.php">NO</a> 
                </form>
            </article> 
        </section>    
    </main>
</body>
</html>