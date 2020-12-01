<?php

namespace Adapter;

class ReaderAdapter implements BookInterface
{
    private eReaderInterface $reader;

    /**
     * constructor.
     * @param eReaderInterface $kindle
     */
    public function __construct(eReaderInterface $kindle)
    {
        $this->reader = $kindle;
    }

    public function open()
    {
        return $this->reader->turnOn();
    }

    public function turnPage()
    {
        return $this->reader->pressNextButton();
    }
}