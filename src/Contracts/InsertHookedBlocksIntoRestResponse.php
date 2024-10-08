<?php

namespace WpService\Contracts;

interface InsertHookedBlocksIntoRestResponse
{
    /**
 * Hooks into the REST API response for the core/navigation block and adds the first and last inner blocks.
 *
 * @since 6.6.0
 *
 * @param \WP_REST_Response $response The response object.
 * @param \WP_Post $post     Post object.
 * @return \WP_REST_Response The response object.
 */
    public function insertHookedBlocksIntoRestResponse(\WP_REST_Response $response, \WP_Post $post): \WP_REST_Response;
}
