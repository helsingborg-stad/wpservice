<?php

namespace WpService\Contracts;

interface WpUpdateHttpsMigrationRequired
{
    /**
 * Updates the 'https_migration_required' option if needed when the given URL has been updated from HTTP to HTTPS.
 *
 * If this is a fresh site, a migration will not be required, so the option will be set as `false`.
 *
 * This is hooked into the {@see 'update_option_home'} action.
 *
 * @since 5.7.0
 * @access private
 *
 * @param mixed $oldUrl Previous value of the URL option.
 * @param mixed $newUrl New value of the URL option.
 */
    public function wpUpdateHttpsMigrationRequired(mixed $oldUrl, mixed $newUrl): void;
}
