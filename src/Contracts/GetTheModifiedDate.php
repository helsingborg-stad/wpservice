<?php

namespace WpService\Contracts;

interface GetTheModifiedDate
{
/**
 * Retrieves the date on which the post was last modified.
 *
 * @since 2.1.0
 * @since 4.6.0 Added the `$post` parameter.
 *
 * @param string $format Optional. PHP date format. Defaults to the 'date_format' option.
 * @param int|\WP_Post $post   Optional. Post ID or WP_Post object. Default current post.
 * @return string|int|false Date the current post was modified. False on failure.
 */
    public function getTheModifiedDate(string $format = '', int|\WP_Post $post = null): string|int|false;
}
