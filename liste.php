<?php

// Connection BDD
include './header.php';

// Récuperer toutes les occurences de la table article
$allArticles = $pdo->query('SELECT * FROM article')->fetchAll();

echo'<table>';
    echo'<thead>';
        echo'<tr>';
        echo'<td>Title</td>';
        echo'<td>Description</td>';
        echo'<td>Options</td>';
        echo'</tr>';
    echo'</thead>';
    echo'<tbody>';
        foreach ($allArticles as $article)
        {
            echo'<tr>';
            echo'<td>'.$article['title'].'</td>';
            echo'<td>'.$article['description'].'</td>';
            echo'<td>
                    <a href="delete.php?id='.$article['id'].'">DELETE</a>
                    <a href="update.php?id='.$article['id'].'">UPDATE</a>
                    </td>';
            echo'</tr>';
        }
    echo'</tbody>';
echo'</table>';


