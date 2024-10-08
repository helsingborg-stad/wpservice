<?php

namespace WpService\Contracts;

interface GetUploadIframeSrc
{
    /**
 * Retrieves the upload iframe source URL.
 *
 * @since 3.0.0
 *
 * @global int $post_ID
 *
 * @param string $type    Media type.
 * @param int $postId Post ID.
 * @param string $tab     Media upload tab.
 * @return string Upload iframe source URL.
 */
    public function getUploadIframeSrc(string $type, int $postId, string $tab): string;
}
