<?php

namespace WpService\Contracts;

interface SanitizePostField
{
    /**
 * Sanitizes a post field based on context.
 *
 * Possible context values are:  'raw', 'edit', 'db', 'display', 'attribute' and
 * 'js'. The 'display' context is used by default. 'attribute' and 'js' contexts
 * are treated like 'display' when calling filters.
 *
 * @since 2.3.0
 * @since 4.4.0 Like `sanitize_post()`, `$context` defaults to 'display'.
 *
 * @param string $field   The Post Object field name.
 * @param mixed $value   The Post Object value.
 * @param int $postId Post ID.
 * @param string $context Optional. How to sanitize the field. Possible values are 'raw', 'edit',
 *                        'db', 'display', 'attribute' and 'js'. Default 'display'.
 * @return mixed Sanitized value.
 */
    public function sanitizePostField(string $field, mixed $value, int $postId, string $context): mixed;
}
