<?php

declare(strict_types=1);

namespace Strategy;

interface LoggerInterface
{
    public function log(string $data): string;
}