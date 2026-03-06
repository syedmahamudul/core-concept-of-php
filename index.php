<?php

trait BookOperations {
    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    public function getBooks()
    {
        return $this->books;
    }
}
    
class HomeContent {
    use BookOperations;
}
