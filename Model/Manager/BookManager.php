<?php


class BookManager extends DbManager
{

    public function __construct()
    {
        parent::__construct();
    }

    public function selectAll(){
        $query ='SELECT * FROM Book';
        $res = $this->bdd->query($query);
        $books = [];

        foreach  ($res as $data) {
            $books[] = new Book($data['id'], $data['name'], $data['author'], $data['category']);
        }
        return $books;
    }

    public function insertBook(book $book)
    {
        $query ="INSERT INTO `Book`(`name`, `author`, `category`) 
        VALUES  ('".$book->getName()."','".$book->getAuthor()."','".$book->getCategory()."')";
        $res = $this->bdd->prepare($query);
        $res->execute();
        $book->setId($this->bdd->lastInsertId());
        var_dump("Book added to Database", false);
    }

    public function deleteBook($id)
    {
        $query = "DELETE FROM `Book` WHERE id = ". $id ;
        $res = $this->bdd->prepare($query);
        $res->execute();
        var_dump("Book delete");
    }

}