<?php

namespace WpService\Contracts;

interface GetPageTemplateSlug
{
    /**
 * Gets the specific template filename for a given post.
 *
 * @since 3.4.0
 * @since 4.7.0 Now works with any post type, not just pages.
 *
 * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is global $post.
 * @return string|false Page template filename. Returns an empty string when the default page template
 *                      is in use. Returns false if the post does not exist.
 */
    public function getPageTemplateSlug(int|\WP_Post $post = null): string|false;
}
