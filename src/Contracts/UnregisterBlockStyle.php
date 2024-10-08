<?php

namespace WpService\Contracts;

interface UnregisterBlockStyle
{
    /**
 * Unregisters a block style.
 *
 * @since 5.3.0
 *
 * @param string $blockName       Block type name including namespace.
 * @param string $blockStyleName Block style name.
 * @return bool True if the block style was unregistered with success and false otherwise.
 */
    public function unregisterBlockStyle(string $blockName, string $blockStyleName): bool;
}
