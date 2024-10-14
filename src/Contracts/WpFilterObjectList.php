<?php

namespace WpService\Contracts;

interface WpFilterObjectList
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
 * When using the `$field` argument, this function can also retrieve
 * a particular field from all matching objects, whereas wp_list_filter()
 * only does the filtering.
 *
 * @since 3.0.0
 * @since 4.7.0 Uses `WP_List_Util` class.
 *
 * @param array $inputList An array of objects to filter.
 * @param array $args       Optional. An array of key => value arguments to match
 *                                against each object. Default empty array.
 * @param string $operator   Optional. The logical operation to perform. 'AND' means
 *                                all elements from the array must match. 'OR' means only
 *                                one element needs to match. 'NOT' means no elements may
 *                                match. Default 'AND'.
 * @param bool|string $field      Optional. A field from the object to place instead
 *                                of the entire object. Default false.
 * @return array A list of objects or object fields.
 */
    public function wpFilterObjectList(array $inputList, array $args = [], string $operator = 'and', bool|string $field = false): array;
}
