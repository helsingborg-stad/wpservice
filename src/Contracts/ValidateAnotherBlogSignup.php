<?php

namespace WpService\Contracts;

interface ValidateAnotherBlogSignup
{
    /**
 * Validates a new site sign-up for an existing user.
 *
 * @since MU (3.0.0)
 *
 * @global string   $blogname   The new site's subdomain or directory name.
 * @global string   $blog_title The new site's title.
 * @global WP_Error $errors     Existing errors in the global scope.
 * @global string   $domain     The new site's domain.
 * @global string   $path       The new site's path.
 *
 * @return null|bool True if site signup was validated, false on error.
 *                   The function halts all execution if the user is not logged in.
 */
    public function validateAnotherBlogSignup(): null|bool;
}
