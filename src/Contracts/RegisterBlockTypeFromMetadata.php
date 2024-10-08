<?php

namespace WpService\Contracts;

interface RegisterBlockTypeFromMetadata
{
    /**
 * Registers a block type from the metadata stored in the `block.json` file.
 *
 * @since 5.5.0
 * @since 5.7.0 Added support for `textdomain` field and i18n handling for all translatable fields.
 * @since 5.9.0 Added support for `variations` and `viewScript` fields.
 * @since 6.1.0 Added support for `render` field.
 * @since 6.3.0 Added `selectors` field.
 * @since 6.4.0 Added support for `blockHooks` field.
 * @since 6.5.0 Added support for `allowedBlocks`, `viewScriptModule`, and `viewStyle` fields.
 *
 * @param string $fileOrFolder Path to the JSON file with metadata definition for
 *                               the block or path to the folder where the `block.json` file is located.
 *                               If providing the path to a JSON file, the filename must end with `block.json`.
 * @param array $args           Optional. Array of block type arguments. Accepts any public property
 *                               of `WP_Block_Type`. See WP_Block_Type::__construct() for information
 *                               on accepted arguments. Default empty array.
 * @return \WP_Block_Type|false The registered block type on success, or false on failure.
 */
    public function registerBlockTypeFromMetadata(string $fileOrFolder, array $args = []): \WP_Block_Type|false;
}
