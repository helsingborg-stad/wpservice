<?php

namespace WpService\Contracts;

interface GetCategories
{
    /**
 * Retrieves a list of category objects.
 *
 * If you set the 'taxonomy' argument to 'link_category', the link categories
 * will be returned instead.
 *
 * @since 2.1.0
 *
 * @see get_terms() Type of arguments that can be changed.
 *
 * @param string|array $args {
 *     Optional. Arguments to retrieve categories. See get_terms() for additional options.
 *
 *     @type string $taxonomy Taxonomy to retrieve terms for. Default 'category'.
 * }
 * @return array List of category objects.
 */
    public function getCategories(string|array $args = ''): array;
}
