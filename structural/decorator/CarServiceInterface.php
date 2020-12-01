<?php

declare(strict_types=1);

namespace structural\decorator;

interface CarServiceInterface
{
    public function getCost(): int;

    public function getDescription(): string;
}