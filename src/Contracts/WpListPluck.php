<?php

namespace WpService\Contracts;

interface WpListPluck
{
    /**
     * Plucks a certain field out of each object or array in an array.
     *
     * This has the same functionality and prototype of
     * array_column() (PHP 5.5) but also supports objects.
     *
     * @since 3.1.0
     * @since 4.0.0 $index_key parameter added.
     * @since 4.7.0 Uses `WP_List_Util` class.
     *
     * @param array $inputList List of objects or arrays.
     * @param int|string $field      Field from the object to place instead of the entire object.
     * @param int|string $indexKey  Optional. Field from the object to use as keys for the new array.
     *                               Default null.
     * @return array Array of found values. If `$index_key` is set, an array of found values with keys
     *               corresponding to `$index_key`. If `$index_key` is null, array keys from the original
     *               `$input_list` will be preserved in the results.
     */
    public function wpListPluck(array $inputList, int|string $field, int|string $indexKey = null): array;
}
