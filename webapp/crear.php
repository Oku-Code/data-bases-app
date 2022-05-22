<?php
     
    require 'conexion.php';
 
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
            $sql = "INSERT INTO predio (ide_pre,dir_pre,est_pre) values(?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($id,$dir,$est));
            Database::disconnect();
            header("Location: predio.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet">
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Crear un predio</h3>
                    </div>
             
                    <form class="form-horizontal" action="crear.php" method="post">
                      <div class="control-group <?php echo !empty($idError)?'error':'';?>">
                        <label class="control-label">ID</label>
                        <div class="controls">
                            <input name="id" type="text"  placeholder="ID" value="<?php echo !empty($id)?$id:'';?>">
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
                          <button type="submit" class="btn btn-success">Crear</button>
                          <a class="btn" href="admin.php">Volver</a>
                        </div>
                    </form>
                </div>
                 
    </div>
  </body>
</html>