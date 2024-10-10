<?php

namespace WpService\Contracts;

interface RegisterBlockScriptModuleId
{
    /**
     * Finds a script module ID for the selected block metadata field. It detects
     * when a path to file was provided and optionally finds a corresponding asset
     * file with details necessary to register the script module under with an
     * automatically generated module ID. It returns unprocessed script module
     * ID otherwise.
     *
     * @since 6.5.0
     *
     * @param array $metadata   Block metadata.
     * @param string $fieldName Field name to pick from metadata.
     * @param int $index      Optional. Index of the script module ID to register when multiple
     *                           items passed. Default 0.
     * @return string|false Script module ID or false on failure.
     */
    public function registerBlockScriptModuleId(array $metadata, string $fieldName, int $index): string|false;
}
