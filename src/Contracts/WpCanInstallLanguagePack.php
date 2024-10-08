<?php

namespace WpService\Contracts;

interface WpCanInstallLanguagePack
{
    /**
     * Check if WordPress has access to the filesystem without asking for
     * credentials.
     *
     * @since 4.0.0
     *
     * @return bool Returns true on success, false on failure.
     */
    public function wpCanInstallLanguagePack(): bool;
}
