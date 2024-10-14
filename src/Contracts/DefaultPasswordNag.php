<?php

namespace WpService\Contracts;

interface DefaultPasswordNag
{
/**
 * @since 2.8.0
 *
 * @global string $pagenow The filename of the current screen.
 */
    public function defaultPasswordNag(): void;
}
