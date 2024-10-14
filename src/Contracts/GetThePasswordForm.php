<?php

namespace WpService\Contracts;

interface GetThePasswordForm
{
/**
 * Retrieves protected post password form content.
 *
 * @since 1.0.0
 *
 * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is global $post.
 * @return string HTML content for password form for password protected post.
 */
    public function getThePasswordForm(int|\WP_Post $post = 0): string;
}
