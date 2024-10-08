<?php

namespace WpService\Contracts;

interface GetMetaSql
{
    /**
 * Given a meta query, generates SQL clauses to be appended to a main query.
 *
 * @since 3.2.0
 *
 * @see WP_Meta_Query
 *
 * @param array $metaQuery        A meta query.
 * @param string $type              Type of meta.
 * @param string $primaryTable     Primary database table name.
 * @param string $primaryIdColumn Primary ID column name.
 * @param object $context           Optional. The main query object. Default null.
 * @return string[]|false {
 *     Array containing JOIN and WHERE SQL clauses to append to the main query,
 *     or false if no table exists for the requested meta type.
 *
 *     @type string $join  SQL fragment to append to the main JOIN clause.
 *     @type string $where SQL fragment to append to the main WHERE clause.
 * }
 */
    public function getMetaSql(array $metaQuery, string $type, string $primaryTable, string $primaryIdColumn, object $context): array|false;
}
