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
                    $username = $_POST['user'];
                    $password = $_POST['password'];
                    $server = 'localhost';
                    $db = 'inmobiliaria';

                    if(isset($_POST['submit-btn'])){
                        $conn = mysqli_connect($server, $username, $password, $db);
                        if(!$conn){
                            die("Connection failed: ". mysqli_connect_error());
                        } else {
                            echo "YES ~ ROUNDABOUT";
                        }

                        mysqli_close($conn)
                    };
                ?>
            </article>
        </section>    
    </main>
</body>
</html>
