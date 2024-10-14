<?php

namespace WpService\Contracts;

interface WpEnqueueScripts
{
/**
 * Wrapper for do_action( 'wp_enqueue_scripts' ).
 *
 * Allows plugins to queue scripts for the front end using wp_enqueue_script().
 * Runs first in wp_head() where all is_home(), is_page(), etc. functions are available.
 *
 * @since 2.8.0
 */
    public function wpEnqueueScripts(): void;
}
