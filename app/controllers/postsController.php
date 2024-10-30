<?php 

namespace App\Controllers\PostsController;

use \PDO, \App\Models\PostsModel;

function homeAction (PDO $connexion) 
{
    // Je vais demander des données aux modèles
    include_once '../app/models/postsModel.php';
    $posts = \App\Models\PostsModel\findAll($connexion);

    
    // Je charge la vu 'home' dans $content

    global $content, $title;
    $title = "Alex Parker - Blog";
    ob_start();
    include '../app/views/posts/home.php';
    $content = ob_get_clean();
}