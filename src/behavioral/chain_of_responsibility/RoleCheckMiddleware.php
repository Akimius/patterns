<?php

declare(strict_types=1);

namespace ChainOfResponsibility;

/**
 * Это Конкретное Middleware проверяет, имеет ли пользователь, связанный с
 * запросом, достаточные права доступа.
 */
class RoleCheckMiddleware extends Middleware
{
    public function check(string $email, string $password): bool
    {
        if ($email === "admin@example.com") {
            echo "RoleCheckMiddleware: Hello, admin!\n";

            return true;
        }

        echo "RoleCheckMiddleware: Hello, user!\n";

        return parent::check($email, $password);
    }
}