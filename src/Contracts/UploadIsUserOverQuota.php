<?php

namespace WpService\Contracts;

interface UploadIsUserOverQuota
{
    /**
 * Checks whether a site has used its allotted upload space.
 *
 * @since MU (3.0.0)
 *
 * @param bool $displayMessage Optional. If set to true and the quota is exceeded,
 *                              a warning message is displayed. Default true.
 * @return bool True if user is over upload space quota, otherwise false.
 */
    public function uploadIsUserOverQuota(bool $displayMessage): bool;
}
