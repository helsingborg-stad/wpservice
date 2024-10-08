<?php

namespace WpService\Contracts;

interface WpMaybeAddFetchpriorityHighAttr
{
    /**
 * Determines whether to add `fetchpriority='high'` to loading attributes.
 *
 * @since 6.3.0
 * @access private
 *
 * @param array $loadingAttrs Array of the loading optimization attributes for the element.
 * @param string $tagName      The tag name.
 * @param array $attr          Array of the attributes for the element.
 * @return array Updated loading optimization attributes for the element.
 */
    public function wpMaybeAddFetchpriorityHighAttr(array $loadingAttrs, string $tagName, array $attr): array;
}
