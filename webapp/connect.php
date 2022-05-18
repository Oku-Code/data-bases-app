<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bases de datos</title>
    <link rel="stylesheet" href="css/style.css">
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
            <article>
                <?php                   
                    $username = "root";
                    $password = '';
                    $server = 'localhost';
                    $db = 'inmobiliaria';
                    $conn = mysqli_connect($server, $username, $password, $db);
                    if(!$conn){
                        die("Connection failed: ". mysqli_connect_error());
                    } else {
                                            
                        if (isset($_POST["submit-btn"])) {
                            $user = $_POST["user"];
                            $pwd = $_POST["password"];
                            $sql = "SELECT * FROM usuario";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    if ($row["ide_usu"] == $user && $row["con_usu"]==$pwd) {
                                        echo "<a href='admin.php'>Ir al panel de control </a>";
                                    }
                                }
                            } else {
                            echo "0 results";
                            }
                            } else {  
                            echo "No, mail is not set";
                        }

                        mysqli_close($conn);
                    };
                ?>
            </article>
        </section>    
    </main>
</body>
</html>
