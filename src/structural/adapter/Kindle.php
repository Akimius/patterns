<?php

namespace Adapter;

class Kindle implements eReaderInterface
{
    public function turnOn(): void
    {
        echo self::class . ': turn the Kindle on';
    }

    public function pressNextButton(): void
    {
        echo  self::class . ': press the next button on the Kindle';
    }
}