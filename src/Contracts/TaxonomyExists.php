<?php

namespace WpService\Contracts;

interface TaxonomyExists
{
    /**
     * @param string $taxonomy
     *
     * @return bool
     */
    public function taxonomyExists(string $taxonomy): bool;
}
