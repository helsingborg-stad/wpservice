<?php

namespace WpService\Contracts;

interface DoFeedRss
{
    /**
 * Loads the RSS 1.0 Feed Template.
 *
 * @since 2.1.0
 *
 * @see load_template()
 */
    public function doFeedRss(): void;
}
