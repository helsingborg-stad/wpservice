<?php

namespace WpService\Contracts;

interface GetDefaultCommentStatus
{
    /**
 * Gets the default comment status for a post type.
 *
 * @since 4.3.0
 *
 * @param string $postType    Optional. Post type. Default 'post'.
 * @param string $commentType Optional. Comment type. Default 'comment'.
 * @return string Either 'open' or 'closed'.
 */
    public function getDefaultCommentStatus(string $postType = 'post', string $commentType = 'comment'): string;
}
