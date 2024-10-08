<?php

namespace WpService\Contracts;

interface SanitizeBookmark
{
    /**
 * Sanitizes all bookmark fields.
 *
 * @since 2.3.0
 *
 * @param \stdClass|array $bookmark Bookmark row.
 * @param string $context  Optional. How to filter the fields. Default 'display'.
 * @return \stdClass|array Same type as $bookmark but with fields sanitized.
 */
    public function sanitizeBookmark(\stdClass|array $bookmark, string $context): \stdClass|array;
}
