<?php

namespace WpService\Contracts;

interface ValidateCurrentTheme
{
    /**
 * Checks that the active theme has the required files.
 *
 * Standalone themes need to have a `templates/index.html` or `index.php` template file.
 * Child themes need to have a `Template` header in the `style.css` stylesheet.
 *
 * Does not initially check the default theme, which is the fallback and should always exist.
 * But if it doesn't exist, it'll fall back to the latest core default theme that does exist.
 * Will switch theme to the fallback theme if active theme does not validate.
 *
 * You can use the {@see 'validate_current_theme'} filter to return false to disable
 * this functionality.
 *
 * @since 1.5.0
 * @since 6.0.0 Removed the requirement for block themes to have an `index.php` template.
 *
 * @see WP_DEFAULT_THEME
 *
 * @return bool
 */
    public function validateCurrentTheme(): bool;
}
