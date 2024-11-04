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

function showAction (PDO $connexion, int $id)
{
    // Je vais demander des données aux modèles
    include_once '../app/models/postsModel.php';
    $post = PostsModel\findOneById($connexion, $id);

    

    global $content, $title;
    $title = "Alex Parker - Blog";
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}

function formAction ()
{


    global $content, $title;
    $title = "Add a post";
    ob_start();
    include '../app/views/posts/addForm.php';
    $content = ob_get_clean();
}

function addPostFormAction(PDO $connexion, array $data)
{
    include_once '../app/models/postsModel.php';
    $post = PostsModel\addOneById($connexion, $data);
    header('Location: ' . BASE_URL);

}



