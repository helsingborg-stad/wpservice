<?php

namespace WpService\Contracts;

interface ConfirmBlogSignup
{
    /**
     * Shows a message confirming that the new site has been registered and is awaiting activation.
     *
     * @since MU (3.0.0)
     *
     * @param string $domain     The domain or subdomain of the site.
     * @param string $path       The path of the site.
     * @param string $blogTitle The title of the new site.
     * @param string $userName  The user's username.
     * @param string $userEmail The user's email address.
     * @param array $meta       Any additional meta from the {@see 'add_signup_meta'} filter in validate_blog_signup().
     */
    public function confirmBlogSignup(string $domain, string $path, string $blogTitle, string $userName = '', string $userEmail = '', array $meta = []): void;
}
