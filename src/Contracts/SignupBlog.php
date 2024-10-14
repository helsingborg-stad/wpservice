<?php

namespace WpService\Contracts;

interface SignupBlog
{
/**
 * Shows a form for a user or visitor to sign up for a new site.
 *
 * @since MU (3.0.0)
 *
 * @param string $userName  The username.
 * @param string $userEmail The user's email address.
 * @param string $blogname   The site name.
 * @param string $blogTitle The site title.
 * @param \WP_Error|string $errors     A WP_Error object containing existing errors. Defaults to empty string.
 */
    public function signupBlog(string $userName = '', string $userEmail = '', string $blogname = '', string $blogTitle = '', \WP_Error|string $errors = ''): void;
}
