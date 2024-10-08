<?php

namespace WpService\Contracts;

interface RegisterBlockStyleHandle
{
    /**
     * Finds a style handle for the block metadata field. It detects when a path
     * to file was provided and registers the style under automatically
     * generated handle name. It returns unprocessed style handle otherwise.
     *
     * @since 5.5.0
     * @since 6.1.0 Added `$index` parameter.
     *
     * @param array $metadata   Block metadata.
     * @param string $fieldName Field name to pick from metadata.
     * @param int $index      Optional. Index of the style to register when multiple items passed.
     *                           Default 0.
     * @return string|false Style handle provided directly or created through
     *                      style's registration, or false on failure.
     */
    public function registerBlockStyleHandle(array $metadata, string $fieldName, int $index = 0): string|false;
}
