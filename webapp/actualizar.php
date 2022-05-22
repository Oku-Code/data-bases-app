<?php
    require 'conexion.php';
 
    $ide_pre = null;
    if ( !empty($_GET['ide_pre'])) {
        $ide_pre = $_REQUEST['ide_pre'];
    }
     
    if ( null==$ide_pre ) {
        header("Location: index.php");
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
            header("Location: predio.php");
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
<html lang="es">
<head>
    <meta charset="utf-8">
    <link   href="css/style.css" rel="stylesheet">
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Actualizar</h3>
                    </div>
             
                    <form class="form-horizontal" action="actualizar.php?ide_pre=<?php echo $ide_pre?>" method="post">
                      <div class="control-group <?php echo !empty($idError)?'error':'';?>">
                        <label class="control-label">ID</label>
                        <div class="controls">
                            <input name="id" type="text"  placeholder="ID" value="<?php echo !empty($ide_pre)?$ide_pre:'';?>">
                            <?php if (!empty($idError)): ?>
                                <span class="help-inline"><?php echo $idError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($dirError)?'error':'';?>">
                        <label class="control-label">Dirección</label>
                        <div class="controls">
                            <input name="dir" type="text" placeholder="Dirección" value="<?php echo !empty($dir)?$dir:'';?>">
                            <?php if (!empty($dirError)): ?>
                                <span class="help-inline"><?php echo $dirError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($estError)?'error':'';?>">
                        <label class="control-label">Estrato</label>
                        <div class="controls">
                            <input name="est" type="text"  placeholder="Estrato" value="<?php echo !empty($est)?$est:'';?>">
                            <?php if (!empty($estError)): ?>
                                <span class="help-inline"><?php echo $estError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Actualizar</button>
                          <a class="btn" href="predio.php">Volver</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>