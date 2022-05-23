<?php
   class Database {
       private static $dbName = "inmobiliaria";
       private static $dbHost = "localhost";
       private static $dbUser = "root";
       private static $dbPasswd = "root";

       private static $conn = null;

       public function __construct(){
           die('Init function is not allowed');
       }

       public static function connect(){
           if(null == self::$conn){
               try {
                   self::$conn = new PDO(
                       "Mysql Host: " . self::$dbHost ."\n". "Database Name: " . self::$dbName, self::$dbUser, self::$dbPasswd
                    )
               } catch (PODExection $error) {
                    die($error->getMessage());
               }
           }

           return self::$conn;
       }

       public static function disconnect(){
           self::$conn = null;
       }
   } 

?>
