<?php

namespace WpService\Contracts;

interface WpCredits
{
    /**
 * Retrieves the contributor credits.
 *
 * @since 3.2.0
 * @since 5.6.0 Added the `$version` and `$locale` parameters.
 *
 * @param string $version WordPress version. Defaults to the current version.
 * @param string $locale  WordPress locale. Defaults to the current user's locale.
 * @return array|false A list of all of the contributors, or false on error.
 */
    public function wpCredits(string $version, string $locale): array|false;
}
