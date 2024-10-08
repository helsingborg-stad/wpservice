<?php

namespace WpService\Contracts;

interface StripCoreBlockNamespace
{
    /**
 * Returns the block name to use for serialization. This will remove the default
 * "core/" namespace from a block name.
 *
 * @since 5.3.1
 *
 * @param string|null $blockName Optional. Original block name. Null if the block name is unknown,
 *                                e.g. Classic blocks have their name set to null. Default null.
 * @return string Block name to use for serialization.
 */
    public function stripCoreBlockNamespace(string|null $blockName = null): string;
}
