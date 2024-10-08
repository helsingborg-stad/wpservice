<?php

namespace WpService\Contracts;

interface GetBookmark
{
    /**
 * Retrieves bookmark data.
 *
 * @since 2.1.0
 *
 * @global object $link Current link object.
 * @global wpdb   $wpdb WordPress database abstraction object.
 *
 * @param int|\stdClass $bookmark
 * @param string $output   Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which
 *                               correspond to an stdClass object, an associative array, or a numeric array,
 *                               respectively. Default OBJECT.
 * @param string $filter   Optional. How to sanitize bookmark fields. Default 'raw'.
 * @return array|object|null Type returned depends on $output value.
 */
    public function getBookmark(int|\stdClass $bookmark, string $output, string $filter): array|object|null;
}
