<?php

declare(strict_types=1);

namespace structural\decorator;

class BasicInspection implements CarServiceInterface
{
    protected int $cost = 25;

    public function getCost(): int
    {
        return $this->cost;
    }

    public function getDescription(): string
    {
        return 'Basic inspection ';
    }
}