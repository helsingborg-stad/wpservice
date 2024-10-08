<?php

namespace WpService\Contracts;

interface SanitizeSqlOrderby
{
    /**
 * Ensures a string is a valid SQL 'order by' clause.
 *
 * Accepts one or more columns, with or without a sort order (ASC / DESC).
 * e.g. 'column_1', 'column_1, column_2', 'column_1 ASC, column_2 DESC' etc.
 *
 * Also accepts 'RAND()'.
 *
 * @since 2.5.1
 *
 * @param string $orderby Order by clause to be validated.
 * @return string|false Returns $orderby if valid, false otherwise.
 */
    public function sanitizeSqlOrderby(string $orderby): string|false;
}
