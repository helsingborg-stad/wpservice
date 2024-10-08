<?php

namespace WpService\Contracts;

interface WpWidgetRssForm
{
    /**
 * Display RSS widget options form.
 *
 * The options for what fields are displayed for the RSS form are all booleans
 * and are as follows: 'url', 'title', 'items', 'show_summary', 'show_author',
 * 'show_date'.
 *
 * @since 2.5.0
 *
 * @param array|string $args   Values for input fields.
 * @param array $inputs Override default display options.
 */
    public function wpWidgetRssForm(array|string $args, array $inputs = null): void;
}
