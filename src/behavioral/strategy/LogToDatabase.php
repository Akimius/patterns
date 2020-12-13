<?php

declare(strict_types=1);

namespace Strategy;

class LogToDatabase implements LoggerInterface
{
    public function log(string $data): string
    {
        return 'Logging to database: ' . $data;
    }
}