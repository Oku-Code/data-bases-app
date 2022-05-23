<?php
   class Database {
       private static $dbName = "inmobiliaria";
       private static $dbHost = "localhost";
       private static $dbUser = "root";
       private static $dbPasswd = "";

       private static $conn = null;

       public function __construct(){
           die('Init function is not allowed');
       }

       public static function connect(){
           if(null == self::$conn){
               try {
                   self::$conn = new PDO(
                       "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUser, self::$dbUserPasswd; 
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
