<?php

namespace WpService\Contracts;

interface PostCommentMetaBoxThead
{
/**
 * Displays comments for post table header
 *
 * @since 3.0.0
 *
 * @param array $result Table header rows.
 * @return array
 */
    public function postCommentMetaBoxThead(array $result): array;
}
