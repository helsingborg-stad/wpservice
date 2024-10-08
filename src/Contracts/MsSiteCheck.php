<?php

namespace WpService\Contracts;

interface MsSiteCheck
{
    /**
 * Checks status of current blog.
 *
 * Checks if the blog is deleted, inactive, archived, or spammed.
 *
 * Dies with a default message if the blog does not pass the check.
 *
 * To change the default message when a blog does not pass the check,
 * use the wp-content/blog-deleted.php, blog-inactive.php and
 * blog-suspended.php drop-ins.
 *
 * @since 3.0.0
 *
 * @return true|string Returns true on success, or drop-in file to include.
 */
    public function msSiteCheck(): true|string;
}
