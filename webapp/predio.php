<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/style.css" rel="stylesheet">
</head>
 
<body>
    <div class="container">
            <div class="row">
                <h3>PHP CRUD Grid</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Dirección</th>
                      <th>Estrato</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'conexion.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM predio ORDER BY ide_pre';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['ide_pre'] . '</td>';
                            echo '<td>'. $row['dir_pre'] . '</td>';
                            echo '<td>'. $row['est_pre'] . '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
            </table>
        </div>
    </div> 
  </body>
</html>