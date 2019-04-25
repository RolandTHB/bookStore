<?php
class IndexController
{
    public function renderIndexAction(){
        $bookManager = new bookManager();
        $books = $bookManager->selectAll();
        require 'Vue/homeView.php';
    }
}