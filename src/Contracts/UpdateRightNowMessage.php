<?php

namespace WpService\Contracts;

interface UpdateRightNowMessage
{
/**
 * Displays WordPress version and active theme in the 'At a Glance' dashboard widget.
 *
 * @since 2.5.0
 */
    public function updateRightNowMessage(): void;
}
