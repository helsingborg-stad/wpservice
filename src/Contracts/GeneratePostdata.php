<?php

namespace WpService\Contracts;

interface GeneratePostdata
{
/**
 * Generates post data.
 *
 * @since 5.2.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @param WP_Post|object|int $post WP_Post instance or Post ID/object.
 * @return array|false Elements of post, or false on failure.
 */
    public function generatePostdata(int|object $post): array|false;
}
