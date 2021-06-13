<?php

namespace Builder;

use stdClass;

class MysqlQueryBuilder implements SQLQueryBuilder
{
    protected stdClass $query;

    private string $table;

    protected function reset(): void
    {
        $this->query = new stdClass();
    }

    /**
     * Построение базового запроса SELECT.
     */
    public function select(array $fields): SQLQueryBuilder
    {
        $this->reset();

        $this->query->base = "SELECT " . implode(", ", $fields); // . " FROM " . $this->table;
        $this->query->type = 'select';

        return $this;
    }

    /**
     * Добавление условия WHERE.
     */
    public function where(string $field, string $value, string $operator = '='): SQLQueryBuilder
    {
        if (!in_array($this->query->type, ['select', 'update', 'delete'])) {
            throw new \Exception("WHERE can only be added to SELECT, UPDATE OR DELETE");
        }

        $this->query->where[] = "$field $operator '$value'";

        return $this;
    }


    /**
     * Добавление ограничения LIMIT.
     */
    public function limit(int $start, int $offset): SQLQueryBuilder
    {
        if ('select' !== $this->query->type) {
            throw new \Exception("LIMIT can only be added to SELECT");
        }
        $this->query->limit = " LIMIT " . $start . ", " . $offset;

        return $this;
    }


    public function from(string $table): SQLQueryBuilder
    {
        $this->table = $table;

        return $this;
    }

    /**
     * Получение окончательной строки запроса.
     * @throws \Exception
     */
    public function getSQL(): string
    {
        $query = $this->query;

        if (empty($this->table)) {
            throw new \Exception('Table name cannot be empty');
        }

        $sql = $query->base . " FROM " . $this->table;

        if (!empty($query->where)) {
            $sql .= " WHERE " . implode(' AND ', $query->where);
        }

        if (isset($query->limit)) {
            $sql .= $query->limit;
        }

        $sql .= ";";
        return $sql;
    }
}