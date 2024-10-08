<?php

namespace WpService\Contracts;

interface RemoveSerializedParentBlock
{
    /**
 * Accepts the serialized markup of a block and its inner blocks, and returns serialized markup of the inner blocks.
 *
 * @since 6.6.0
 * @access private
 *
 * @param string $serializedBlock The serialized markup of a block and its inner blocks.
 * @return string The serialized markup of the inner blocks.
 */
    public function removeSerializedParentBlock(string $serializedBlock): string;
}
