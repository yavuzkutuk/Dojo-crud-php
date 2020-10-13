<?php

include 'header.php';

if(isset($_GET['id']) && $_GET['id']<>''){
    $statement = $pdo->prepare('DELETE FROM article WHERE id=:id');
    $statement->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $statement->execute();
    echo '<h2>TAgashi Magashi</h2>';
    echo '<meta http-equiv="refresh" content="1;URL=liste.php">';
}
