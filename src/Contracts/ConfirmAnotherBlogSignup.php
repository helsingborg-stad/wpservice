<?php

namespace WpService\Contracts;

interface ConfirmAnotherBlogSignup
{
    /**
 * Shows a message confirming that the new site has been created.
 *
 * @since MU (3.0.0)
 * @since 4.4.0 Added the `$blog_id` parameter.
 *
 * @param string $domain     The domain URL.
 * @param string $path       The site root path.
 * @param string $blogTitle The site title.
 * @param string $userName  The username.
 * @param string $userEmail The user's email address.
 * @param array $meta       Any additional meta from the {@see 'add_signup_meta'} filter in validate_blog_signup().
 * @param int $blogId    The site ID.
 */
    public function confirmAnotherBlogSignup(string $domain, string $path, string $blogTitle, string $userName, string $userEmail = '', array $meta = [], int $blogId = 0): void;
}
