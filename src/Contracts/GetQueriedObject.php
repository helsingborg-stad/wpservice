<?php

namespace WpService\Contracts;

interface GetQueriedObject
{
    /**
 * Retrieves the currently queried object.
 *
 * Wrapper for WP_Query::get_queried_object().
 *
 * @since 3.1.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @return \WP_Term|\WP_Post_Type|\WP_Post|\WP_User|null The queried object.
 */
    public function getQueriedObject(): \WP_Term|\WP_Post_Type|\WP_Post|\WP_User|null;
}
