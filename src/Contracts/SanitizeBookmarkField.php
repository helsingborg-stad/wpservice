<?php

namespace WpService\Contracts;

interface SanitizeBookmarkField
{
    /**
 * Sanitizes a bookmark field.
 *
 * Sanitizes the bookmark fields based on what the field name is. If the field
 * has a strict value set, then it will be tested for that, else a more generic
 * filtering is applied. After the more strict filter is applied, if the `$context`
 * is 'raw' then the value is immediately return.
 *
 * Hooks exist for the more generic cases. With the 'edit' context, the {@see 'edit_$field'}
 * filter will be called and passed the `$value` and `$bookmark_id` respectively.
 *
 * With the 'db' context, the {@see 'pre_$field'} filter is called and passed the value.
 * The 'display' context is the final context and has the `$field` has the filter name
 * and is passed the `$value`, `$bookmark_id`, and `$context`, respectively.
 *
 * @since 2.3.0
 *
 * @param string $field       The bookmark field.
 * @param mixed $value       The bookmark field value.
 * @param int $bookmarkId Bookmark ID.
 * @param string $context     How to filter the field value. Accepts 'raw', 'edit', 'db',
 *                            'display', 'attribute', or 'js'. Default 'display'.
 * @return mixed The filtered value.
 */
    public function sanitizeBookmarkField(string $field, mixed $value, int $bookmarkId, string $context): mixed;
}
