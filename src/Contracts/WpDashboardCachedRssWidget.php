<?php

namespace WpService\Contracts;

interface WpDashboardCachedRssWidget
{
    /**
     * Checks to see if all of the feed url in $check_urls are cached.
     *
     * If $check_urls is empty, look for the rss feed url found in the dashboard
     * widget options of $widget_id. If cached, call $callback, a function that
     * echoes out output for this widget. If not cache, echo a "Loading..." stub
     * which is later replaced by Ajax call (see top of /wp-admin/index.php)
     *
     * @since 2.5.0
     * @since 5.3.0 Formalized the existing and already documented `...$args` parameter
     *              by adding it to the function signature.
     *
     * @param string $widgetId  The widget ID.
     * @param callable $callback   The callback function used to display each feed.
     * @param array $checkUrls RSS feeds.
     * @param mixed    ...$args    Optional additional parameters to pass to the callback function.
     * @return bool True on success, false on failure.
     */
    public function wpDashboardCachedRssWidget(string $widgetId, callable $callback, array $checkUrls = [], mixed ...$args): bool;
}
