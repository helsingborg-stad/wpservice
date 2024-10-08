<?php

namespace WpService\Contracts;

interface WpKsesHtmlError
{
    /**
 * Handles parsing errors in `wp_kses_hair()`.
 *
 * The general plan is to remove everything to and including some whitespace,
 * but it deals with quotes and apostrophes as well.
 *
 * @since 1.0.0
 *
 * @param string $attr
 * @return string
 */
    public function wpKsesHtmlError(string $attr): string;
}
