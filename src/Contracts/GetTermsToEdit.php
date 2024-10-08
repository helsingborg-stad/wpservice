<?php

namespace WpService\Contracts;

interface GetTermsToEdit
{
    /**
 * Gets comma-separated list of terms available to edit for the given post ID.
 *
 * @since 2.8.0
 *
 * @param int $postId
 * @param string $taxonomy Optional. The taxonomy for which to retrieve terms. Default 'post_tag'.
 * @return string|false|\WP_Error
 */
    public function getTermsToEdit(int $postId, string $taxonomy): string|false|\WP_Error;
}
