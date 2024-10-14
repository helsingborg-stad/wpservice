<?php

namespace WpService\Contracts;

interface WpImageEditorSupports
{
/**
 * Tests whether there is an editor that supports a given mime type or methods.
 *
 * @since 3.5.0
 *
 * @param string|array $args Optional. Array of arguments to retrieve the image editor supports.
 *                           Default empty array.
 * @return bool True if an eligible editor is found; false otherwise.
 */
    public function wpImageEditorSupports(string|array $args = []): bool;
}
