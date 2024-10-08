<?php

namespace WpService\Contracts;

interface WpGetCustomCssPost
{
    /**
 * Fetches the `custom_css` post for a given theme.
 *
 * @since 4.7.0
 *
 * @param string $stylesheet Optional. A theme object stylesheet name. Defaults to the active theme.
 * @return \WP_Post|null The custom_css post or null if none exists.
 */
public function wpGetCustomCssPost(string $stylesheet = ''): \WP_Post|null;
}
