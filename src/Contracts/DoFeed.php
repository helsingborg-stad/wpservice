<?php

namespace WpService\Contracts;

interface DoFeed
{
    /**
     * Loads the feed template from the use of an action hook.
     *
     * If the feed action does not have a hook, then the function will die with a
     * message telling the visitor that the feed is not valid.
     *
     * It is better to only have one hook for each feed.
     *
     * @since 2.1.0
     *
     * @global WP_Query $wp_query WordPress Query object.
     */
    public function doFeed(): void;
}
