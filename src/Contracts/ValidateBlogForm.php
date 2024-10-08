<?php

namespace WpService\Contracts;

interface ValidateBlogForm
{
    /**
 * Validates the new site sign-up.
 *
 * @since MU (3.0.0)
 *
 * @return array Contains the new site data and error messages.
 *               See wpmu_validate_blog_signup() for details.
 */
    public function validateBlogForm(): array;
}
