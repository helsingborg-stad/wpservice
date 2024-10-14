<?php

namespace WpService\Contracts;

interface GetQueriedObjectId
{
/**
 * Retrieves the ID of the currently queried object.
 *
 * Wrapper for WP_Query::get_queried_object_id().
 *
 * @since 3.1.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @return int ID of the queried object.
 */
    public function getQueriedObjectId(): int;
}
