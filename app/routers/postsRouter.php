<?php
include_once '../app/controllers/postsController.php';

switch ($_GET['posts']):
    case 'show':
        \App\Controllers\PostsController\showAction($connexion, $_GET['id']);
        break;
    case 'form':
        \App\Controllers\PostsController\formAction();
        break;
    case 'addForm':
        \App\Controllers\PostsController\addPostFormAction($connexion, $_POST);
        break;
        
endswitch;
        

