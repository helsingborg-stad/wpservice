<?php

namespace WpService\Contracts;

interface WpFilterContentTags
{
    /**
     * Filters specific tags in post content and modifies their markup.
     *
     * Modifies HTML tags in post content to include new browser and HTML technologies
     * that may not have existed at the time of post creation. These modifications currently
     * include adding `srcset`, `sizes`, and `loading` attributes to `img` HTML tags, as well
     * as adding `loading` attributes to `iframe` HTML tags.
     * Future similar optimizations should be added/expected here.
     *
     * @since 5.5.0
     * @since 5.7.0 Now supports adding `loading` attributes to `iframe` tags.
     *
     * @see wp_img_tag_add_width_and_height_attr()
     * @see wp_img_tag_add_srcset_and_sizes_attr()
     * @see wp_img_tag_add_loading_optimization_attrs()
     * @see wp_iframe_tag_add_loading_attr()
     *
     * @param string $content The HTML content to be filtered.
     * @param string $context Optional. Additional context to pass to the filters.
     *                        Defaults to `current_filter()` when not set.
     * @return string Converted content with images modified.
     */
    public function wpFilterContentTags(string $content, string $context = null): string;
}
