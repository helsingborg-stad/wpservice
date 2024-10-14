<?php

namespace WpService\Contracts;

interface GetTranslationsForDomain
{
/**
 * Returns the Translations instance for a text domain.
 *
 * If there isn't one, returns empty Translations instance.
 *
 * @since 2.8.0
 *
 * @global MO[] $l10n An array of all currently loaded text domains.
 *
 * @param string $domain Text domain. Unique identifier for retrieving translated strings.
 * @return \Translations|\NOOP_Translations A Translations instance.
 */
    public function getTranslationsForDomain(string $domain): \Translations|\NOOP_Translations;
}
