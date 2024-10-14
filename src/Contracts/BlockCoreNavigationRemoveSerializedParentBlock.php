<?php

namespace WpService\Contracts;

interface BlockCoreNavigationRemoveSerializedParentBlock
{
/**
 * Accepts the serialized markup of a block and its inner blocks, and returns serialized markup of the inner blocks.
 *
 * @since 6.5.0
 *
 * @param string $serializedBlock The serialized markup of a block and its inner blocks.
 * @return string
 */
    public function blockCoreNavigationRemoveSerializedParentBlock(string $serializedBlock): string;
}
