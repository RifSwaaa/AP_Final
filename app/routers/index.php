<?php
// ROUTER PRINCIPAL

// ROUTE PAR DEFAUT
// PATERN : /
// CTRL : pagesController
// ACTION : homeAction
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\homeAction($connexion);