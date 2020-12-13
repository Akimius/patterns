<?php

declare(strict_types=1);

namespace Strategy;

class App
{
    public function log($data, LoggerInterface $logger = null): string
    {
        $logger = $logger ?: new LogToFile();

        return $logger->log($data);
    }
}