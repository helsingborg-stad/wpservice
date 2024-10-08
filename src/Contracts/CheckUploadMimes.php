<?php

namespace WpService\Contracts;

interface CheckUploadMimes
{
    /**
     * Checks an array of MIME types against a list of allowed types.
     *
     * WordPress ships with a set of allowed upload filetypes,
     * which is defined in wp-includes/functions.php in
     * get_allowed_mime_types(). This function is used to filter
     * that list against the filetypes allowed provided by Multisite
     * Super Admins at wp-admin/network/settings.php.
     *
     * @since MU (3.0.0)
     *
     * @param array $mimes
     * @return array
     */
    public function checkUploadMimes(array $mimes): array;
}
