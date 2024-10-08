<?php

namespace WpService\Contracts;

interface HtmlTypeRss
{
    /**
 * Displays the HTML type based on the blog setting.
 *
 * The two possible values are either 'xhtml' or 'html'.
 *
 * @since 2.2.0
 */
    public function htmlTypeRss(): void;
}
