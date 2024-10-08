<?php

namespace WpService\Contracts;

interface SignupAnotherBlog
{
    /**
     * Shows a form for returning users to sign up for another site.
     *
     * @since MU (3.0.0)
     *
     * @param string $blogname   The new site name
     * @param string $blogTitle The new site title.
     * @param \WP_Error|string $errors     A WP_Error object containing existing errors. Defaults to empty string.
     */
    public function signupAnotherBlog(string $blogname = '', string $blogTitle = '', \WP_Error|string $errors = ''): void;
}
