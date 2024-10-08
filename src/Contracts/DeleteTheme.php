<?php

namespace WpService\Contracts;

interface DeleteTheme
{
    /**
 * Removes a theme.
 *
 * @since 2.8.0
 *
 * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
 *
 * @param string $stylesheet Stylesheet of the theme to delete.
 * @param string $redirect   Redirect to page when complete.
 * @return bool|null|\WP_Error True on success, false if `$stylesheet` is empty, WP_Error on failure.
 *                            Null if filesystem credentials are required to proceed.
 */
    public function deleteTheme(string $stylesheet, string $redirect): bool|null|\WP_Error;
}
