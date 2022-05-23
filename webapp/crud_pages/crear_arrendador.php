<?php
     require '../conexion.php';

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
             header("Location: ../pages/predio.php");
         }
     }
 ?>
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
                <h2>Crear un Arrendador</h2>
                <p>Ingresa los datos correspondientes a la creaciòn de un arrendador</p>
           </div>
            <article class="admin"> 
                <form class="crud-create" action="crear_arrendador.php">
                    <label for="id">Identificaciòn</label>
                    <input type="text" name="id" placeholder="Inserta el numero de contrato" required>
                    <label for="id">Nombre</label>
                    <input type="text" name="id" placeholder="Inserta el tipo de contrato" required>
                    <label for="id">Email</label>
                    <input type="number" name="id" placeholder="" required>
                    <label for="id">Telefono</label>
                    <input type="number" name="id" placeholder="" required>
                    <label for="id">Identificaciòn del predio</label>
                    <input type="number" name="id" placeholder="" required>
                    <button type="submit" class="create-btn create">Crear</button>
                    <a class="back" href="../admin.php">Volver a la pagina principal</a>
                </form>
            </article> 
        </section>    
    </main>
</body>
</html>


