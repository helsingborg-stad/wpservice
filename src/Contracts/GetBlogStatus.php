<?php

namespace WpService\Contracts;

interface GetBlogStatus
{
    /**
     * Gets a blog details field.
     *
     * @since MU (3.0.0)
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int $id   Blog ID.
     * @param string $pref Field name.
     * @return bool|string|null $value
     */
    public function getBlogStatus(int $id, string $pref): bool|string|null;
}
