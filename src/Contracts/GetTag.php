<?php

namespace WpService\Contracts;

interface GetTag
{
    /**
 * Retrieves a post tag by tag ID or tag object.
 *
 * If you pass the $tag parameter an object, which is assumed to be the tag row
 * object retrieved from the database, it will cache the tag data.
 *
 * If you pass $tag an integer of the tag ID, then that tag will be retrieved
 * from the database, if it isn't already cached, and passed back.
 *
 * If you look at get_term(), both types will be passed through several filters
 * and finally sanitized based on the $filter parameter value.
 *
 * @since 2.3.0
 *
 * @param int|WP_Term|object $tag    A tag ID or object.
 * @param string $output Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which
 *                                   correspond to a WP_Term object, an associative array, or a numeric array,
 *                                   respectively. Default OBJECT.
 * @param string $filter Optional. How to sanitize tag fields. Default 'raw'.
 * @return \WP_Term|array|\WP_Error|null Tag data in type defined by $output parameter.
 *                                     WP_Error if $tag is empty, null if it does not exist.
 */
    public function getTag(int|object $tag, string $output, string $filter): \WP_Term|array|\WP_Error|null;
}
