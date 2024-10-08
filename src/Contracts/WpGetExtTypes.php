<?php

namespace WpService\Contracts;

interface WpGetExtTypes
{
    /**
     * Retrieves the list of common file extensions and their types.
     *
     * @since 4.6.0
     *
     * @return array[] Multi-dimensional array of file extensions types keyed by the type of file.
     */
    public function wpGetExtTypes(): array;
}
