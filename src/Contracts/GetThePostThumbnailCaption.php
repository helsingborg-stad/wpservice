<?php

namespace WpService\Contracts;

interface GetThePostThumbnailCaption
{
/**
 * Returns the post thumbnail caption.
 *
 * @since 4.6.0
 *
 * @param int|\WP_Post|null $post Optional. Post ID or WP_Post object. Default is global `$post`.
 * @return string Post thumbnail caption.
 */
    public function getThePostThumbnailCaption(int|\WP_Post|null $post = null): string;
}
