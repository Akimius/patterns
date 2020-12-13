<?php

declare(strict_types=1);

namespace Strategy;

class LogToWebservice implements LoggerInterface
{
    public function log(string $data): string
    {
        return 'Logging to webservice ' . $data;
    }
}