<?php


class book extends BookManager implements BookInterface
{
    private $id;
    private $name;
    private $author;
    private $category;

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param null $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param null $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * book constructor.
     * @param $id
     * @param $name
     * @param $author
     * @param $category
     */
    public function __construct($id = null, $name = null, $author = null, $category = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->author = $author;
        $this->category = $category;
    }

    public function getAll(){
        return parent::selectAll();
    }

}