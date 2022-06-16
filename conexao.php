<?php
require_once 'pdoconfig.php';

 
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Conectado com sucesso.";
} catch (PDOException $pe) {
    die("Não foi possível se conectar ao banco de dados  :" . $pe->getMessage());
    }
    


    
?>
 