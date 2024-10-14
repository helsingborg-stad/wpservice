<?php

namespace WpService\Contracts;

interface SanitizePost
{
/**
 * Sanitizes every post field.
 *
 * If the context is 'raw', then the post object or array will get minimal
 * sanitization of the integer fields.
 *
 * @since 2.3.0
 *
 * @see sanitize_post_field()
 *
 * @param object|WP_Post|array $post    The post object or array
 * @param string $context Optional. How to sanitize post fields.
 *                                      Accepts 'raw', 'edit', 'db', 'display',
 *                                      'attribute', or 'js'. Default 'display'.
 * @return object|WP_Post|array The now sanitized post object or array (will be the
 *                              same type as `$post`).
 */
    public function sanitizePost(array|object $post, string $context = 'display'): array|object;
}
