<?php

require 'vendor/autoload.php';

use Adapter\Book;
use Adapter\BookInterface;
use Adapter\Kindle;
use Adapter\ReaderAdapter;

class Person
{
    public function read(BookInterface $book): void
    {
        $book->open();
        echo PHP_EOL;
        $book->turnPage();
        echo PHP_EOL;
    }
}

$person = new Person();
$kindle = new Kindle();
$book   = new Book();

$person->read($book);
$person->read(new ReaderAdapter($kindle));
