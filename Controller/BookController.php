<?php


class BookController
{
    public function newBookAction()

    {
        require 'Vue/newBook.php';

    }

    public function formBookAction()
    {
        $bookManager = new BookManager();
        $book = new Book(null, $_POST['name'], $_POST['author'],$_POST['category']);
        $bookManager->insertBook($book);
        // appeler book manager pour enregistrer en base le livre
        header("Location:  http://localhost/bookStore/index.php?controller=index&action=renderIndex");

    }

    public function deleteBookAction($id)
    {
        $bookManager = new bookManager();
        $bookManager->deleteBook($id);
        header("Location:  http://localhost/bookStore/index.php?controller=index&action=renderIndex");

    }
    

}