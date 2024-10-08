<?php

namespace WpService\Contracts;

interface WpMaybeGrantInstallLanguagesCap
{
    /**
     * Filters the user capabilities to grant the 'install_languages' capability as necessary.
     *
     * A user must have at least one out of the 'update_core', 'install_plugins', and
     * 'install_themes' capabilities to qualify for 'install_languages'.
     *
     * @since 4.9.0
     *
     * @param bool[] $allcaps An array of all the user's capabilities.
     * @return bool[] Filtered array of the user's capabilities.
     */
    public function wpMaybeGrantInstallLanguagesCap(array $allcaps): array;
}
