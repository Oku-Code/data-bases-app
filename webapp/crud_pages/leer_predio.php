<?php
    require 'conexion.php';
    $ide_pre = null;
    if ( !empty($_GET['ide_pre'])) {
        $ide_pre = $_REQUEST['ide_pre'];
    }
     
    if ( null==$ide_pre ) {
        header("Location: predio.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM predio where ide_pre = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($ide_pre));
        $data = $q->fetch(PDO::FETCH_ASSOC);
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
                <h2>Informacion sobre el predio</h2>
           </div>
            <article class="admin"> 
               <table>
                   <thead>
                       <th>Identificaciòn del predio</th>
                       <th>Direcciòn del predio</th>
                       <th>Estrato del predio</th>
                   </thead>
                   <tbody>
                       <?php
                            echo '<tr>$data['ide_pre']</tr>';
                            echo '<tr>$data['dir_pre']</tr>';
                            echo '<tr>$data['est_pre']</tr>';
                       ?>
                   </tbody>
                </table>
                </form>
            </article> 
        </section>    
    </main>
</body>
</html>
