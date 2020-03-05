<?php
require 'db/config.php';

$array = array();

if (!empty($_POST['texto'])) {
    $texto = $_POST['texto'];
    
    $sql = "SELECT * FROM produtos WHERE nome LIKE :texto";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":texto", '%'.$texto.'%');
    $sql->execute();
    
    if ($sql->rowCount() > 0) {
        
        foreach ($sql->fetchAll() as $produto){
            $array[] = array('nome'=>utf8_encode($produto['nome']), 'id'=>$produto['id']);
        }
    }
}

echo json_encode($array);
?>