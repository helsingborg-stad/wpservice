<?php

namespace WpService\Contracts;

interface WpListFilter
{
    /**
     * Filters a list of objects, based on a set of key => value arguments.
     *
     * Retrieves the objects from the list that match the given arguments.
     * Key represents property name, and value represents property value.
     *
     * If an object has more properties than those specified in arguments,
     * that will not disqualify it. When using the 'AND' operator,
     * any missing properties will disqualify it.
     *
     * If you want to retrieve a particular field from all matching objects,
     * use wp_filter_object_list() instead.
     *
     * @since 3.1.0
     * @since 4.7.0 Uses `WP_List_Util` class.
     * @since 5.9.0 Converted into a wrapper for `wp_filter_object_list()`.
     *
     * @param array $inputList An array of objects to filter.
     * @param array $args       Optional. An array of key => value arguments to match
     *                           against each object. Default empty array.
     * @param string $operator   Optional. The logical operation to perform. 'AND' means
     *                           all elements from the array must match. 'OR' means only
     *                           one element needs to match. 'NOT' means no elements may
     *                           match. Default 'AND'.
     * @return array Array of found values.
     */
    public function wpListFilter(array $inputList, array $args = [], string $operator = 'AND'): array;
}
