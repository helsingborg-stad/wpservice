<?php

namespace WpService\Contracts;

interface ValidateThemeRequirements
{
/**
 * Validates the theme requirements for WordPress version and PHP version.
 *
 * Uses the information from `Requires at least` and `Requires PHP` headers
 * defined in the theme's `style.css` file.
 *
 * @since 5.5.0
 * @since 5.8.0 Removed support for using `readme.txt` as a fallback.
 *
 * @param string $stylesheet Directory name for the theme.
 * @return true|\WP_Error True if requirements are met, WP_Error on failure.
 */
    public function validateThemeRequirements(string $stylesheet): true|\WP_Error;
}
