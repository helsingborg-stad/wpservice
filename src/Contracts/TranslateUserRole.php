<?php

namespace WpService\Contracts;

interface TranslateUserRole
{
    /**
 * Translates role name.
 *
 * Since the role names are in the database and not in the source there
 * are dummy gettext calls to get them into the POT file and this function
 * properly translates them back.
 *
 * The before_last_bar() call is needed, because older installations keep the roles
 * using the old context format: 'Role name|User role' and just skipping the
 * content after the last bar is easier than fixing them in the DB. New installations
 * won't suffer from that problem.
 *
 * @since 2.8.0
 * @since 5.2.0 Added the `$domain` parameter.
 *
 * @param string $name   The role name.
 * @param string $domain Optional. Text domain. Unique identifier for retrieving translated strings.
 *                       Default 'default'.
 * @return string Translated role name on success, original name on failure.
 */
    public function translateUserRole(string $name, string $domain = 'default'): string;
}
