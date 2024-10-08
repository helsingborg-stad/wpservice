<?php

namespace WpService\Contracts;

interface RequestFilesystemCredentials
{
    /**
 * Displays a form to the user to request for their FTP/SSH details in order
 * to connect to the filesystem.
 *
 * All chosen/entered details are saved, excluding the password.
 *
 * Hostnames may be in the form of hostname:portnumber (eg: wordpress.org:2467)
 * to specify an alternate FTP/SSH port.
 *
 * Plugins may override this form by returning true|false via the {@see 'request_filesystem_credentials'} filter.
 *
 * @since 2.5.0
 * @since 4.6.0 The `$context` parameter default changed from `false` to an empty string.
 *
 * @global string $pagenow The filename of the current screen.
 *
 * @param string $formPost                    The URL to post the form to.
 * @param string $type                         Optional. Chosen type of filesystem. Default empty.
 * @param bool|\WP_Error $error                        Optional. Whether the current request has failed
 *                                                    to connect, or an error object. Default false.
 * @param string $context                      Optional. Full path to the directory that is tested
 *                                                    for being writable. Default empty.
 * @param array $extraFields                 Optional. Extra `POST` fields to be checked
 *                                                    for inclusion in the post. Default null.
 * @param bool $allowRelaxedFileOwnership Optional. Whether to allow Group/World writable.
 *                                                    Default false.
 * @return bool|array True if no filesystem credentials are required,
 *                    false if they are required but have not been provided,
 *                    array of credentials if they are required and have been provided.
 */
    public function requestFilesystemCredentials(string $formPost, string $type, bool|\WP_Error $error, string $context, array $extraFields, bool $allowRelaxedFileOwnership): bool|array;
}
