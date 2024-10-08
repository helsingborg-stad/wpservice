<?php

namespace WpService\Contracts;

interface WpKsesAllowedHtml
{
    /**
 * Returns an array of allowed HTML tags and attributes for a given context.
 *
 * @since 3.5.0
 * @since 5.0.1 `form` removed as allowable HTML tag.
 *
 * @global array $allowedposttags
 * @global array $allowedtags
 * @global array $allowedentitynames
 *
 * @param string|array $context The context for which to retrieve tags. Allowed values are 'post',
 *                              'strip', 'data', 'entities', or the name of a field filter such as
 *                              'pre_user_description', or an array of allowed HTML elements and attributes.
 * @return array Array of allowed HTML tags and their allowed attributes.
 */
    public function wpKsesAllowedHtml(string|array $context = ''): array;
}
