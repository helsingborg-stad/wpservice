<?php

namespace WpService\Contracts;

interface WpWidgetRssOutput
{
    /**
 * Display the RSS entries in a list.
 *
 * @since 2.5.0
 *
 * @param string|array|object $rss  RSS url.
 * @param array $args Widget arguments.
 */
    public function wpWidgetRssOutput(string|array|object $rss, array $args = []): void;
}
