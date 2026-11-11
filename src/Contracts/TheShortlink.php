<?php

namespace WpService\Contracts;

interface TheShortlink
{
/**
 * Displays the shortlink for a post.
 *
 * Must be called from inside "The Loop"
 *
 * Call like the_shortlink( __( 'Shortlinkage FTW' ) )
 *
 * @since 3.0.0
 * @since 6.8.0 Removed title attribute.
 *
 * @param string $text   Optional. The link text or HTML to be displayed. Defaults to 'This is the short link.'
 * @param string $title  Unused.
 * @param string $before Optional. HTML to display before the link. Default empty.
 * @param string $after  Optional. HTML to display after the link. Default empty.
 */
    public function theShortlink(string $text = '', string $title = '', string $before = '', string $after = ''): void;
}
