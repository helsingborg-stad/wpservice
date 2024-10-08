<?php

namespace WpService\Contracts;

interface WpAddFootnotesToRevision
{
    /**
     * Adds the footnotes field to the revisions display.
     *
     * @since 6.3.0
     *
     * @param array $fields The revision fields.
     * @return array The revision fields.
     */
    public function wpAddFootnotesToRevision(array $fields): array;
}
