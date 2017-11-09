<?php

require_once '../../../autoload.php';

use DesignPatterns\Behavioral\Iterator\Book;
use DesignPatterns\Behavioral\Iterator\BookList;
$bookList = new BookList();
$bookList->addBook(new Book('Learning PHP Design Patterns', 'William Sanders'));
$bookList->addBook(new Book('Professional Php Design Patterns', 'Aaron Saray'));
$bookList->addBook(new Book('Clean Code', 'Robert C. Martin'));

$books = [];

foreach ($bookList as $book)
{
    $r = $bookList->next();
    $books[] = $book->getAuthorAndTitle();
}

var_dump($books);
