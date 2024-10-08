<?php

namespace WpService\Contracts;

interface WPFilesystem
{
    /**
 * Initializes and connects the WordPress Filesystem Abstraction classes.
 *
 * This function will include the chosen transport and attempt connecting.
 *
 * Plugins may add extra transports, And force WordPress to use them by returning
 * the filename via the {@see 'filesystem_method_file'} filter.
 *
 * @since 2.5.0
 *
 * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
 *
 * @param array|false $args                         Optional. Connection args, These are passed
 *                                                   directly to the `WP_Filesystem_*()` classes.
 *                                                   Default false.
 * @param string|false $context                      Optional. Context for get_filesystem_method().
 *                                                   Default false.
 * @param bool $allowRelaxedFileOwnership Optional. Whether to allow Group/World writable.
 *                                                   Default false.
 * @return bool|null True on success, false on failure,
 *                   null if the filesystem method class file does not exist.
 */
    public function wPFilesystem(array|false $args = false, string|false $context = false, bool $allowRelaxedFileOwnership = false): bool|null;
}
