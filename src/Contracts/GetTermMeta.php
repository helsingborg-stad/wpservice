<?php

namespace WpService\Contracts;

interface GetTermMeta
{
    /**
     * Get the meta value(s) of a term.
     *
     * @param int $termId The term ID.
     * @param string $key Optional. The meta key.
     * @param bool $single Optional. Whether to return a single value or an array of values. Default false.
     * @return mixed The meta value(s) of the term.
     */
    public function getTermMeta(int $termId, string $key = '', bool $single = false): mixed;
}
