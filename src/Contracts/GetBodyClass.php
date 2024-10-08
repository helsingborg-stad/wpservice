<?php

namespace WpService\Contracts;

interface GetBodyClass
{
    /**
 * Retrieves an array of the class names for the body element.
 *
 * @since 2.8.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @param string|string[] $cssClass Optional. Space-separated string or array of class names
 *                                   to add to the class list. Default empty.
 * @return string[] Array of class names.
 */
    public function getBodyClass(string|array $cssClass): array;
}
