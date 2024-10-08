<?php

namespace WpService\Contracts;

interface UpdateBlogStatus
{
    /**
 * Updates a blog details field.
 *
 * @since MU (3.0.0)
 * @since 5.1.0 Use wp_update_site() internally.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $blogId    Blog ID.
 * @param string $pref       Field name.
 * @param string $value      Field value.
 * @param null $deprecated Not used.
 * @return string|false $value
 */
    public function updateBlogStatus(int $blogId, string $pref, string $value, null $deprecated): string|false;
}
