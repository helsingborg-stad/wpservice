<?php

namespace WpService\Contracts;

interface WpHtmlCustomDataAttributeName
{
/**
 * Returns a corresponding HTML attribute name for the given name,
 * if that name were found in a JS element’s `dataset` property.
 *
 * Example:
 *
 *     'data-post-id'        === wp_html_custom_data_attribute_name( 'postId' );
 *     'data--before'        === wp_html_custom_data_attribute_name( 'Before' );
 *     'data---one---two---' === wp_html_custom_data_attribute_name( '-One--Two---' );
 *
 *     // Not every attribute name will be interpreted as a custom data attribute.
 *     null === wp_html_custom_data_attribute_name( '/not-an-attribute/' );
 *     null === wp_html_custom_data_attribute_name( 'no spaces' );
 *
 *     // Some very surprising names will; for example, a property whose name is the empty string.
 *     'data-' === wp_html_custom_data_attribute_name( '' );
 *
 * @since 6.9.0
 *
 * @see https://html.spec.whatwg.org/#concept-domstringmap-pairs
 * @see \wp_js_dataset_name()
 *
 * @param string $jsDatasetName Name of JS `dataset` property to transform.
 * @return string|null Corresponding name of an HTML custom data attribute for the given dataset name,
 *                     if possible to represent in HTML, otherwise `null`.
 */
    public function wpHtmlCustomDataAttributeName(string $jsDatasetName): string|null;
}
