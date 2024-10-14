<?php

namespace WpService\Contracts;

interface GetPost
{
/**
 * Retrieves post data given a post ID or post object.
 *
 * See sanitize_post() for optional $filter values. Also, the parameter
 * `$post`, must be given as a variable, since it is passed by reference.
 *
 * @since 1.5.1
 *
 * @global WP_Post $post Global post object.
 *
 * @param int|\WP_Post|null $post   Optional. Post ID or post object. `null`, `false`, `0` and other PHP falsey values
 *                                 return the current global post inside the loop. A numerically valid post ID that
 *                                 points to a non-existent post returns `null`. Defaults to global $post.
 * @param string $output Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which
 *                                 correspond to a WP_Post object, an associative array, or a numeric array,
 *                                 respectively. Default OBJECT.
 * @param string $filter Optional. Type of filter to apply. Accepts 'raw', 'edit', 'db',
 *                                 or 'display'. Default 'raw'.
 * @return \WP_Post|array|null Type corresponding to $output on success or null on failure.
 *                            When $output is OBJECT, a `WP_Post` instance is returned.
 */
    public function getPost(int|\WP_Post|null $post = null, string $output = OBJECT, string $filter = 'raw'): \WP_Post|array|null;
}
