<?php
    function connectToDb($server_name, $username, $password){

        $server_name = htmlentities($_GET['server']);
        $username = htmlentities($_GET['user']);
        $password = htmlentities($_GET['password']);

/*         $conn = new mysqli($server_name, $username, $password);
        if(!$conn){
            return die("Connection Failed: " . mysqli_connect_error() -> connect_error);
        } else {
            return echo "Connect Succesfully";
        };

        mysqli_close($conn); */

        return echo "User: " . $username;
    };
?>

