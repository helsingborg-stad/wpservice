<?php

namespace WpService\Contracts;

interface DoFeedRss2
{
    /**
 * Loads either the RSS2 comment feed or the RSS2 posts feed.
 *
 * @since 2.1.0
 *
 * @see load_template()
 *
 * @param bool $forComments True for the comment feed, false for normal feed.
 */
    public function doFeedRss2(bool $forComments): void;
}
