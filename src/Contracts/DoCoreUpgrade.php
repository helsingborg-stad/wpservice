<?php

namespace WpService\Contracts;

interface DoCoreUpgrade
{
    /**
     * Upgrades WordPress core display.
     *
     * @since 2.7.0
     *
     * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
     *
     * @param bool $reinstall
     */
    public function doCoreUpgrade(bool $reinstall = false): void;
}
