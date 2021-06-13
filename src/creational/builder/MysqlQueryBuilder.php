<?php

namespace Builder;

use stdClass;

class MysqlQueryBuilder implements SQLQueryBuilder
{
    protected stdClass $query;

    protected function reset(): void
    {
        $this->query = new stdClass();
    }

    /**
     * Построение базового запроса SELECT.
     */
    public function select(string $table, array $fields): SQLQueryBuilder
    {
        $this->reset();

        $this->query->base = "SELECT " . implode(", ", $fields) . " FROM " . $table;
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

    /**
     * Получение окончательной строки запроса.
     */
    public function getSQL(): string
    {
        $query = $this->query;
        $sql = $query->base;
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