<?php

namespace WpService\Contracts;

interface WpCreatePostAutosave
{
    /**
 * Creates autosave data for the specified post from `$_POST` data.
 *
 * @since 2.6.0
 *
 * @param array|int $postData Associative array containing the post data, or integer post ID.
 *                             If a numeric post ID is provided, will use the `$_POST` superglobal.
 * @return int|\WP_Error The autosave revision ID. WP_Error or 0 on error.
 */
    public function wpCreatePostAutosave(array|int $postData): int|\WP_Error;
}
