<?php

namespace WpService\Contracts;

interface CoreUpgradePreamble
{
    /**
 * Display upgrade WordPress for downloading latest or upgrading automatically form.
 *
 * @since 2.7.0
 */
    public function coreUpgradePreamble(): void;
}
