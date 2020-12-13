<?php

declare(strict_types=1);

namespace Strategy;

class LogToFile implements LoggerInterface
{
    public function log(string $data): string
    {
        return 'Logging to file: ' . $data;
    }
}