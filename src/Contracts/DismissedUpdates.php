<?php

namespace WpService\Contracts;

interface DismissedUpdates
{
/**
 * Display dismissed updates.
 *
 * @since 2.7.0
 */
    public function dismissedUpdates(): void;
}
