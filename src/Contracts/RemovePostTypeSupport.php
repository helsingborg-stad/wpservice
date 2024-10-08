<?php

namespace WpService\Contracts;

interface RemovePostTypeSupport
{
    /**
 * Removes support for a feature from a post type.
 *
 * @since 3.0.0
 *
 * @global array $_wp_post_type_features
 *
 * @param string $postType The post type for which to remove the feature.
 * @param string $feature   The feature being removed.
 */
    public function removePostTypeSupport(string $postType, string $feature): void;
}
