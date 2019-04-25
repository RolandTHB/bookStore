<?php

interface BookInterface
{
    public function getId();
    public function setId($id);
    public function getName();
    public function setName($name);
    public function getAuthor();
    public function setAuthor($author);
    public function getCategory();
    public function setCategory($category);

}