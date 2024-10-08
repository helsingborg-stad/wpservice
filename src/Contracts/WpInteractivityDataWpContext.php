<?php

namespace WpService\Contracts;

interface WpInteractivityDataWpContext
{
    /**
 * Generates a `data-wp-context` directive attribute by encoding a context
 * array.
 *
 * This helper function simplifies the creation of `data-wp-context` directives
 * by providing a way to pass an array of data, which encodes into a JSON string
 * safe for direct use as a HTML attribute value.
 *
 * Example:
 *
 *     <div <?php echo wp_interactivity_data_wp_context( array( 'isOpen' => true, 'count' => 0 ) ); ?>>
 *
 * @since 6.5.0
 *
 * @param array $context         The array of context data to encode.
 * @param string $storeNamespace Optional. The unique store namespace identifier.
 * @return string A complete `data-wp-context` directive with a JSON encoded value representing the context array and
 *                the store namespace if specified.
 */
    public function wpInteractivityDataWpContext(array $context, string $storeNamespace = ''): string;
}
