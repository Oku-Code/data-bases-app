<?php
    require 'conexion.php';
    $ide_pre = 0;
     
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
        header("Location: index.php");
         
    }
?>
 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link   href="css/style.css" rel="stylesheet">
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Eliminar predio</h3>
                    </div>
                     
                    <form class="form-horizontal" action="eliminar.php" method="post">
                      <input type="hidden" name="ide_pre" value="<?php echo $ide_pre;?>"/>
                      <p class="alert alert-error">¿Seguro que desea eliminar este predio?</p>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-danger">Si</button>
                          <a class="btn" href="index.php">No</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>