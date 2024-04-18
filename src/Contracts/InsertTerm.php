<?php

namespace WpService\Contracts;

use WP_Error;

interface InsertTerm
{
    /**
     * Insert a term into a taxonomy.
     *
     * @param string $term The term to insert.
     * @param string $taxonomy The taxonomy to insert the term into.
     * @param array $args Additional arguments for inserting the term.
     * @return array|WP_Error The inserted term data or WP_Error on failure.
     */
    public function insertTerm(
        string $term,
        string $taxonomy = "",
        array $args = []
    ): array|WP_Error;
}
