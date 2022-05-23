<?php
    require '../conexion.php';

    $ide_pre = null;

    if ( !empty($_GET['ide_pre'])) {
        $ide_pre = $_REQUEST['ide_pre'];
    }
     
    if ( null==$ide_pre ) {
        header("Location: ../pages/predio.php");
    }
     
    if ( !empty($_POST)) {
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
            $sql = "UPDATE predio  set ide_pre = ?, dir_pre = ?, est_pre =? WHERE ide_pre = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($id,$dir,$est,$ide_pre));
            Database::disconnect();
            header("Location: ../pages/predio.php");
        }
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM predio where ide_pre = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($ide_pre));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $id = $data['ide_pre'];
        $dir = $data['dir_pre'];
        $est = $data['est_pre'];
        Database::disconnect();
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
                <h2>Actualizar un pedido</h2>
                <p>Ingresa los datos correspondientes a la actualizaciòn de un pedido</p>
           </div>
            <article class="admin"> 
                <form class="crud-create" action="actualizar_predio.php?ide_pre=<?php echo $ide_pre?>" method="POST">
                   <div class="control <? php echo !empty($idError) ? 'Error' : '';?>">
                        <label for="id">Identificaciòn</label>
                        <input type="text" name="id" placeholder="Inserta el ID del predio" value="<?php echo !empty($id)?$id:'';?>">
                        <?php
                            if (!empty($idError)) : ?>
                            <span><?php echo $idError; ?></span>
                        <?php endif; ?>
                    </div>

                    <div <? php echo !empty($dirError) ? '<span>Error</span>' : '';?>>
                        <label for="id">Direcciòn del predio</label>
                        <input type="text" name="dir" placeholder="Inserta la direcciòn del predio" value="<?php echo !empty($dir) ? $dir: '';?>">
                        <?php
                            if (!empty($dirError)) : ?>
                            <span><?php echo $dirError; ?></span>
                        <?php endif; ?>
                    </div>
                    
                    <div <? php echo !empty($estError) ? '<span>Error</span>' : '';?>>
                        <label for="id">Estrato del predio</label>
                        <input type="text" name="est" placeholder="Inserta la direcciòn del predio" value="<?php echo !empty($est) ? $est: '';?>">
                        <?php
                            if (!empty($estError)) : ?>
                            <span><?php echo $estError; ?></span>
                        <?php endif; ?>
                    </div>

                    <button type="submit" class="up-btn">Actualizar</button>
                    <a class="back" href="../pages/predio.php">Volver a la pagina principal</a>
                </form>
            </article> 
        </section>    
    </main>
</body>
</html>