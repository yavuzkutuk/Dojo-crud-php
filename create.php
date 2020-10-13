<?php

include './header.php';

// SI j'ai cliqué
if(isset($_POST['submit']) && $_POST['submit']=='submit'){
    $sql = 'INSERT INTO article VALUES (null, :title, :description)';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
    $statement->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
    $statement->execute();

    echo '<h2>Youpiii PDO c\'est fini</h2>';
    echo '<meta http-equiv="refresh" content="1;URL=liste.php">';
}
?>

<form method="post">
    <input type="text" name="title"><br/>
    <textarea name="description"></textarea><br/>
    <input type="submit" name="submit" value="submit">
</form>
