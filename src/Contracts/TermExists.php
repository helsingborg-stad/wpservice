<?php

namespace WpService\Contracts;

interface TermExists
{
    /**
     * @param int|string $term
     * @param string $taxonomy
     * @param int $parent
     *
     * @return null|int|array
     */
    public function termExists(
        int|string $term,
        string $taxonomy = "",
        int $parentTerm = null
    ): null|int|array;
}
