<?php

namespace WpService\Contracts;

interface WpWidgetRssProcess
{
    /**
 * Process RSS feed widget data and optionally retrieve feed items.
 *
 * The feed widget can not have more than 20 items or it will reset back to the
 * default, which is 10.
 *
 * The resulting array has the feed title, feed url, feed link (from channel),
 * feed items, error (if any), and whether to show summary, author, and date.
 * All respectively in the order of the array elements.
 *
 * @since 2.5.0
 *
 * @param array $widgetRss RSS widget feed data. Expects unescaped data.
 * @param bool $checkFeed Optional. Whether to check feed for errors. Default true.
 * @return array
 */
    public function wpWidgetRssProcess(array $widgetRss, bool $checkFeed): array;
}
