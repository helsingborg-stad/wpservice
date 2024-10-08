<?php

namespace WpService\Contracts;

interface TagExists
{
    /**
     * Checks whether a post tag with a given name exists.
     *
     * @since 2.3.0
     *
     * @param int|string $tagName
     * @return mixed Returns null if the term does not exist.
     *               Returns an array of the term ID and the term taxonomy ID if the pairing exists.
     *               Returns 0 if term ID 0 is passed to the function.
     */
    public function tagExists(int|string $tagName): mixed;
}
