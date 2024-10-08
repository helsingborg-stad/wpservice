<?php

namespace WpService\Contracts;

interface BlockCoreNavigationInsertHookedBlocksIntoRestResponse
{
    /**
     * Hooks into the REST API response for the core/navigation block and adds the first and last inner blocks.
     *
     * @since 6.5.0
     *
     * @param \WP_REST_Response $response The response object.
     * @param \WP_Post $post     Post object.
     * @return \WP_REST_Response The response object.
     */
    public function blockCoreNavigationInsertHookedBlocksIntoRestResponse(\WP_REST_Response $response, \WP_Post $post): \WP_REST_Response;
}
