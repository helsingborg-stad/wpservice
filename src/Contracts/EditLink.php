<?php

namespace WpService\Contracts;

interface EditLink
{
    /**
 * Updates or inserts a link using values provided in $_POST.
 *
 * @since 2.0.0
 *
 * @param int $linkId Optional. ID of the link to edit. Default 0.
 * @return int|\WP_Error Value 0 or WP_Error on failure. The link ID on success.
 */
    public function editLink(int $linkId = 0): int|\WP_Error;
}
