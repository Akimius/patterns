<?php

declare(strict_types=1);

namespace Builder;

/**
 * Интерфейс Строителя объявляет набор методов для сборки SQL-запроса.
 *
 * Все шаги построения возвращают текущий объект строителя, чтобы обеспечить
 * цепочку: $builder->select(...)->where(...)
 */

interface SQLQueryBuilder
{
    public function select(array $fields): SQLQueryBuilder;

    public function from(string $table): SQLQueryBuilder;

    public function where(string $field, string $value, string $operator = '='): SQLQueryBuilder;

    public function limit(int $start, int $offset): SQLQueryBuilder;

    // +100 других методов синтаксиса SQL...

    public function getSQL(): string;

}