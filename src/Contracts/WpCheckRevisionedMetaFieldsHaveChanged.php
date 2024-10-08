<?php

namespace WpService\Contracts;

interface WpCheckRevisionedMetaFieldsHaveChanged
{
    /**
 * Check whether revisioned post meta fields have changed.
 *
 * @since 6.4.0
 *
 * @param bool $postHasChanged Whether the post has changed.
 * @param \WP_Post $lastRevision    The last revision post object.
 * @param \WP_Post $post             The post object.
 * @return bool Whether the post has changed.
 */
    public function wpCheckRevisionedMetaFieldsHaveChanged(bool $postHasChanged, \WP_Post $lastRevision, \WP_Post $post): bool;
}
