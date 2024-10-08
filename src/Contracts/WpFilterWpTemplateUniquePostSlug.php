<?php

namespace WpService\Contracts;

interface WpFilterWpTemplateUniquePostSlug
{
    /**
 * Generates a unique slug for templates.
 *
 * @access private
 * @since 5.8.0
 *
 * @param string $overrideSlug The filtered value of the slug (starts as `null` from apply_filter).
 * @param string $slug          The original/un-filtered slug (post_name).
 * @param int $postId       Post ID.
 * @param string $postStatus   No uniqueness checks are made if the post is still draft or pending.
 * @param string $postType     Post type.
 * @return string The original, desired slug.
 */
    public function wpFilterWpTemplateUniquePostSlug(string $overrideSlug, string $slug, int $postId, string $postStatus, string $postType): string;
}
