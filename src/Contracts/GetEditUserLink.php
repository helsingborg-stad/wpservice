<?php

namespace WpService\Contracts;

interface GetEditUserLink
{
    /**
 * Retrieves the edit user link.
 *
 * @since 3.5.0
 *
 * @param int $userId Optional. User ID. Defaults to the current user.
 * @return string URL to edit user page or empty string.
 */
    public function getEditUserLink(int $userId = null): string;
}
