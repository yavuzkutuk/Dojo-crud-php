<?php

include './header.php';

// SI j'ai cliqué
if(isset($_POST['submit']) && $_POST['submit']=='update'){
    $sql = 'UPDATE article SET title = :title, description = :description WHERE id=:id';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
    $statement->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
    $statement->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
    $statement->execute();

    echo '<h2>Youpiii PDO c\'est fini</h2>';
    echo '<meta http-equiv="refresh" content="1;URL=liste.php">';
}
$sql = 'SELECT * FROM article WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->bindValue(':id', $_GET['id'],PDO::PARAM_INT);
$statement->execute();
$article = $statement->fetch();
$title = $article['title'];
$description = $article['description'];
?>

<form method="post">
    <input type="text" name="title" value="<?php echo $title; ?>"><br/>
    <textarea name="description"><?php echo $description; ?></textarea><br/>
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <input type="submit" name="submit" value="update">
</form>
