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

