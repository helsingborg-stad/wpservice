<?php

namespace WpService\Contracts;

interface GetCategory
{
    /**
 * Retrieves category data given a category ID or category object.
 *
 * If you pass the $category parameter an object, which is assumed to be the
 * category row object retrieved the database. It will cache the category data.
 *
 * If you pass $category an integer of the category ID, then that category will
 * be retrieved from the database, if it isn't already cached, and pass it back.
 *
 * If you look at get_term(), then both types will be passed through several
 * filters and finally sanitized based on the $filter parameter value.
 *
 * @since 1.5.1
 *
 * @param int|object $category Category ID or category row object.
 * @param string $output   Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which
 *                             correspond to a WP_Term object, an associative array, or a numeric array,
 *                             respectively. Default OBJECT.
 * @param string $filter   Optional. How to sanitize category fields. Default 'raw'.
 * @return object|array|WP_Error|null Category data in type defined by $output parameter.
 *                                    WP_Error if $category is empty, null if it does not exist.
 */
    public function getCategory(int|object $category, string $output = OBJECT, string $filter = 'raw'): array|null|object;
}
