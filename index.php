<?php
include 'include.php';

if($_GET['controller'] === 'index' && $_GET['action'] == 'renderIndex'){
    $indexController = new IndexController();
    $indexController->renderIndexAction();
}

else if($_GET['controller'] === 'book' && $_GET['action'] == 'newBook'){
    $articleController = new BookController();
    $articleController->newBookAction();
}

else if($_GET['controller'] === 'book' && $_GET['action'] == 'formBook') {
    $articleController = new BookController();
    $articleController->formBookAction();
}
else if($_GET['controller'] === 'book' && $_GET['action'] == 'deleteBook'){
    $articleController = new BookController();
    $articleController->deleteBookAction($_GET['id']);
}
else {
    $exception = new Exception("La page demandée n'existe pas", 404);
    throw  $exception;
}



?>