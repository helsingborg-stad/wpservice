<?php

namespace WpService\Contracts;

interface GetBlockWrapperAttributes
{
    /**
 * Generates a string of attributes by applying to the current block being
 * rendered all of the features that the block supports.
 *
 * @since 5.6.0
 *
 * @param string[] $extraAttributes Optional. Array of extra attributes to render on the block wrapper.
 * @return string String of HTML attributes.
 */
    public function getBlockWrapperAttributes(array $extraAttributes): string;
}
