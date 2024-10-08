<?php

namespace WpService\Contracts;

interface WpPrintStyles
{
    /**
 * Displays styles that are in the $handles queue.
 *
 * Passing an empty array to $handles prints the queue,
 * passing an array with one string prints that style,
 * and passing an array of strings prints those styles.
 *
 * @since 2.6.0
 *
 * @global WP_Styles $wp_styles The WP_Styles object for printing styles.
 *
 * @param string|bool|array $handles Styles to be printed. Default 'false'.
 * @return string[] On success, an array of handles of processed WP_Dependencies items; otherwise, an empty array.
 */
    public function wpPrintStyles(string|bool|array $handles): array;
}
