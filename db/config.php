<?php 
try {
    
    $pdo = new PDO("mysql:dbname=auto_complete_produto;host=localhost", "root", "");
    
} catch (PDOException $e) {
    echo "ERRO ".$e->getMessage();
    exit();
}
?>