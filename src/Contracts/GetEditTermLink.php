<?php

namespace WpService\Contracts;

use WP_Term;

interface GetEditTermLink
{
    /**
     * Get the edit term link.
     *
     * @param int|WP_Term $term The term ID or object.
     * @param string $taxonomy The taxonomy name.
     * @param string $objectType The object type.
     * @return string|null The edit term link or null if not found.
     */
    public function getEditTermLink(
        int|WP_Term $term,
        string $taxonomy = '',
        string $objectType = ''
    ): string|null;
}
