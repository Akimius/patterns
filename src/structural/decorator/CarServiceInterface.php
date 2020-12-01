<?php

declare(strict_types=1);

namespace Decorator;

interface CarServiceInterface
{
    public function getCost(): int;

    public function getDescription(): string;
}