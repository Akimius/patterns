<?php

namespace Adapter;

class Book implements BookInterface
{
    public function open()
    {
        echo self::class . ': opening a paper book';
    }

    public function turnPage()
    {
        echo self::class . ': turning the page of a paper book';
    }
}
