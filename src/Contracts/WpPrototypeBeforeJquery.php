<?php

namespace WpService\Contracts;

interface WpPrototypeBeforeJquery
{
    /**
 * Reorders JavaScript scripts array to place prototype before jQuery.
 *
 * @since 2.3.1
 *
 * @param string[] $jsArray JavaScript scripts array
 * @return string[] Reordered array, if needed.
 */
    public function wpPrototypeBeforeJquery(array $jsArray): array;
}
