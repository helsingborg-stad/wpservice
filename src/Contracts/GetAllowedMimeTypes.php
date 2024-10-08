<?php

namespace WpService\Contracts;

interface GetAllowedMimeTypes
{
    /**
 * Retrieves the list of allowed mime types and file extensions.
 *
 * @since 2.8.6
 *
 * @param int|\WP_User $user Optional. User to check. Defaults to current user.
 * @return string[] Array of mime types keyed by the file extension regex corresponding
 *                  to those types.
 */
    public function getAllowedMimeTypes(int|\WP_User $user = null): array;
}
