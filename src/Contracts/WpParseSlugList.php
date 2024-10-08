<?php

namespace WpService\Contracts;

interface WpParseSlugList
{
    /**
     * Cleans up an array, comma- or space-separated list of slugs.
     *
     * @since 4.7.0
     * @since 5.1.0 Refactored to use wp_parse_list().
     *
     * @param array|string $inputList List of slugs.
     * @return string[] Sanitized array of slugs.
     */
    public function wpParseSlugList(array|string $inputList): array;
}
