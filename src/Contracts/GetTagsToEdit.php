<?php

namespace WpService\Contracts;

interface GetTagsToEdit
{
    /**
 * Gets comma-separated list of tags available to edit.
 *
 * @since 2.3.0
 *
 * @param int $postId
 * @param string $taxonomy Optional. The taxonomy for which to retrieve terms. Default 'post_tag'.
 * @return string|false|\WP_Error
 */
    public function getTagsToEdit(int $postId, string $taxonomy): string|false|\WP_Error;
}
