<?php

namespace WpService\Contracts;

interface GetSearchQuery
{
    /**
 * Retrieves the contents of the search WordPress query variable.
 *
 * The search query string is passed through esc_attr() to ensure that it is safe
 * for placing in an HTML attribute.
 *
 * @since 2.3.0
 *
 * @param bool $escaped Whether the result is escaped. Default true.
 *                      Only use when you are later escaping it. Do not use unescaped.
 * @return string
 */
    public function getSearchQuery(bool $escaped = true): string;
}
