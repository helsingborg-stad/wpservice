<?php

namespace WpService\Contracts;

interface WpListSort
{
    /**
     * Sorts an array of objects or arrays based on one or more orderby arguments.
     *
     * @since 4.7.0
     *
     * @param array $inputList    An array of objects or arrays to sort.
     * @param string|array $orderby       Optional. Either the field name to order by or an array
     *                                    of multiple orderby fields as `$orderby => $order`.
     *                                    Default empty array.
     * @param string $order         Optional. Either 'ASC' or 'DESC'. Only used if `$orderby`
     *                                    is a string. Default 'ASC'.
     * @param bool $preserveKeys Optional. Whether to preserve keys. Default false.
     * @return array The sorted array.
     */
    public function wpListSort(array $inputList, string|array $orderby = [], string $order = 'ASC', bool $preserveKeys = false): array;
}
