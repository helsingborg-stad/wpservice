<?php

namespace WpService\Contracts;

interface WpJsDatasetName
{
/**
 * Return the corresponding JavaScript `dataset` name for an attribute
 * if it represents a custom data attribute, or `null` if not.
 *
 * Custom data attributes appear in an element's `dataset` property in a
 * browser, but there's a specific way the names are translated from HTML
 * into JavaScript. This function indicates how the name would appear in
 * JavaScript if a browser would recognize it as a custom data attribute.
 *
 * Example:
 *
 *     // Dash-letter pairs turn into capital letters.
 *     'postId'       === wp_js_dataset_name( 'data-post-id' );
 *     'Before'       === wp_js_dataset_name( 'data--before' );
 *     '-One--Two---' === wp_js_dataset_name( 'data---one---two---' );
 *
 *     // Not every attribute name will be interpreted as a custom data attribute.
 *     null === wp_js_dataset_name( 'post-id' );
 *     null === wp_js_dataset_name( 'data' );
 *
 *     // Some very surprising names will; for example, a property whose name is the empty string.
 *     '' === wp_js_dataset_name( 'data-' );
 *     0  === strlen( wp_js_dataset_name( 'data-' ) );
 *
 * @since 6.9.0
 *
 * @see https://html.spec.whatwg.org/#concept-domstringmap-pairs
 * @see \wp_html_custom_data_attribute_name()
 *
 * @param string $htmlAttributeName Raw attribute name as found in the source HTML.
 * @return string|null Transformed `dataset` name, if interpretable as a custom data attribute, else `null`.
 */
public function wpJsDatasetName(string $htmlAttributeName): string|null;
}