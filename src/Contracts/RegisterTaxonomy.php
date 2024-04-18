<?php

namespace WpService\Contracts;

interface RegisterTaxonomy
{
    /**
     * Register a taxonomy.
     *
     * @param string $taxonomy The taxonomy name.
     * @param array|string $objectType The object type(s) to associate the taxonomy with.
     * @param array|string $args Optional. Array or query string of arguments for registering the taxonomy.
     * @return void
     */
    public function registerTaxonomy(string $taxonomy, array|string $objectType, array|string $args = []): void;
}
