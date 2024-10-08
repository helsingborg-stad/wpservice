<?php

namespace WpService\Contracts;

interface UnloadTextdomain
{
    /**
     * Unloads translations for a text domain.
     *
     * @since 3.0.0
     * @since 6.1.0 Added the `$reloadable` parameter.
     *
     * @global MO[] $l10n          An array of all currently loaded text domains.
     * @global MO[] $l10n_unloaded An array of all text domains that have been unloaded again.
     *
     * @param string $domain     Text domain. Unique identifier for retrieving translated strings.
     * @param bool $reloadable Whether the text domain can be loaded just-in-time again.
     * @return bool Whether textdomain was unloaded.
     */
    public function unloadTextdomain(string $domain, bool $reloadable = false): bool;
}
