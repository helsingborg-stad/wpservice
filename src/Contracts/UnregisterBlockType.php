<?php

namespace WpService\Contracts;

interface UnregisterBlockType
{
    /**
 * Unregisters a block type.
 *
 * @since 5.0.0
 *
 * @param string|\WP_Block_Type $name Block type name including namespace, or alternatively
 *                                   a complete WP_Block_Type instance.
 * @return \WP_Block_Type|false The unregistered block type on success, or false on failure.
 */
    public function unregisterBlockType(string|\WP_Block_Type $name): \WP_Block_Type|false;
}
