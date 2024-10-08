<?php

namespace WpService\Contracts;

interface WpPrintScripts
{
    /**
     * Prints scripts in document head that are in the $handles queue.
     *
     * Called by admin-header.php and {@see 'wp_head'} hook. Since it is called by wp_head on every page load,
     * the function does not instantiate the WP_Scripts object unless script names are explicitly passed.
     * Makes use of already-instantiated `$wp_scripts` global if present. Use provided {@see 'wp_print_scripts'}
     * hook to register/enqueue new scripts.
     *
     * @see WP_Scripts::do_item()
     * @since 2.1.0
     *
     * @global WP_Scripts $wp_scripts The WP_Scripts object for printing scripts.
     *
     * @param string|string[]|false $handles Optional. Scripts to be printed. Default 'false'.
     * @return string[] On success, an array of handles of processed WP_Dependencies items; otherwise, an empty array.
     */
    public function wpPrintScripts(string|array|false $handles = false): array;
}
