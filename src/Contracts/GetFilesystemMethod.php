<?php

namespace WpService\Contracts;

interface GetFilesystemMethod
{
/**
 * Determines which method to use for reading, writing, modifying, or deleting
 * files on the filesystem.
 *
 * The priority of the transports are: Direct, SSH2, FTP PHP Extension, FTP Sockets
 * (Via Sockets class, or `fsockopen()`). Valid values for these are: 'direct', 'ssh2',
 * 'ftpext' or 'ftpsockets'.
 *
 * The return value can be overridden by defining the `FS_METHOD` constant in `wp-config.php`,
 * or filtering via {@see 'filesystem_method'}.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#wordpress-upgrade-constants
 *
 * Plugins may define a custom transport handler, See WP_Filesystem().
 *
 * @since 2.5.0
 *
 * @global callable $_wp_filesystem_direct_method
 *
 * @param array $args                         Optional. Connection details. Default empty array.
 * @param string $context                      Optional. Full path to the directory that is tested
 *                                             for being writable. Default empty.
 * @param bool $allowRelaxedFileOwnership Optional. Whether to allow Group/World writable.
 *                                             Default false.
 * @return string The transport to use, see description for valid return values.
 */
    public function getFilesystemMethod(array $args = [], string $context = '', bool $allowRelaxedFileOwnership = false): string;
}
