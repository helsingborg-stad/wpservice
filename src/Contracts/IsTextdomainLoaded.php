<?php

namespace WpService\Contracts;

interface IsTextdomainLoaded
{
    /**
 * Determines whether there are translations for the text domain.
 *
 * @since 3.0.0
 *
 * @global MO[] $l10n An array of all currently loaded text domains.
 *
 * @param string $domain Text domain. Unique identifier for retrieving translated strings.
 * @return bool Whether there are translations.
 */
    public function isTextdomainLoaded(string $domain): bool;
}
