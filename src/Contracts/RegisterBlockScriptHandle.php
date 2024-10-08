<?php

namespace WpService\Contracts;

interface RegisterBlockScriptHandle
{
    /**
 * Finds a script handle for the selected block metadata field. It detects
 * when a path to file was provided and optionally finds a corresponding asset
 * file with details necessary to register the script under automatically
 * generated handle name. It returns unprocessed script handle otherwise.
 *
 * @since 5.5.0
 * @since 6.1.0 Added `$index` parameter.
 * @since 6.5.0 The asset file is optional. Added script handle support in the asset file.
 *
 * @param array $metadata   Block metadata.
 * @param string $fieldName Field name to pick from metadata.
 * @param int $index      Optional. Index of the script to register when multiple items passed.
 *                           Default 0.
 * @return string|false Script handle provided directly or created through
 *                      script's registration, or false on failure.
 */
    public function registerBlockScriptHandle(array $metadata, string $fieldName, int $index): string|false;
}
