<?php

trait BookOperations
{
    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    public function getBooks()
    {
        return $this->books;
    }
}




trait BookShelfTrait
{
    use BookOperations;
}


class BookShelf
{
    use BookShelfTrait;

    private $books = [];
}

