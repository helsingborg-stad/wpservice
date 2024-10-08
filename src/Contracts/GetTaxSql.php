<?php

namespace WpService\Contracts;

interface GetTaxSql
{
    /**
     * Given a taxonomy query, generates SQL to be appended to a main query.
     *
     * @since 3.1.0
     *
     * @see WP_Tax_Query
     *
     * @param array $taxQuery         A compact tax query
     * @param string $primaryTable
     * @param string $primaryIdColumn
     * @return string[]
     */
    public function getTaxSql(array $taxQuery, string $primaryTable, string $primaryIdColumn): array;
}
