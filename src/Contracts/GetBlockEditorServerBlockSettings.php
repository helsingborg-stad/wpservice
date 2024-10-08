<?php

namespace WpService\Contracts;

interface GetBlockEditorServerBlockSettings
{
    /**
 * Prepares server-registered blocks for the block editor.
 *
 * Returns an associative array of registered block data keyed by block name. Data includes properties
 * of a block relevant for client registration.
 *
 * @since 5.0.0
 * @since 6.3.0 Added `selectors` field.
 * @since 6.4.0 Added `block_hooks` field.
 *
 * @return array An associative array of registered block data.
 */
    public function getBlockEditorServerBlockSettings(): array;
}
