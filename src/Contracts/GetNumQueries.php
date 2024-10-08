<?php

namespace WpService\Contracts;

interface GetNumQueries
{
    /**
     * Retrieves the number of database queries during the WordPress execution.
     *
     * @since 2.0.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @return int Number of database queries.
     */
    public function getNumQueries(): int;
}
