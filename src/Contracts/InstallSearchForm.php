<?php

namespace WpService\Contracts;

interface InstallSearchForm
{
    /**
 * Displays a search form for searching plugins.
 *
 * @since 2.7.0
 * @since 4.6.0 The `$type_selector` parameter was deprecated.
 *
 * @param bool $deprecated Not used.
 */
    public function installSearchForm(bool $deprecated = true): void;
}
