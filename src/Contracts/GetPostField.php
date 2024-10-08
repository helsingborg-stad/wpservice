<?php

namespace WpService\Contracts;

interface GetPostField
{
    /**
 * Retrieves data from a post field based on Post ID.
 *
 * Examples of the post field will be, 'post_type', 'post_status', 'post_content',
 * etc and based off of the post object property or key names.
 *
 * The context values are based off of the taxonomy filter functions and
 * supported values are found within those functions.
 *
 * @since 2.3.0
 * @since 4.5.0 The `$post` parameter was made optional.
 *
 * @see sanitize_post_field()
 *
 * @param string $field   Post field name.
 * @param int|\WP_Post $post    Optional. Post ID or post object. Defaults to global $post.
 * @param string $context Optional. How to filter the field. Accepts 'raw', 'edit', 'db',
 *                             or 'display'. Default 'display'.
 * @return string The value of the post field on success, empty string on failure.
 */
    public function getPostField(string $field, int|\WP_Post $post, string $context): string;
}
