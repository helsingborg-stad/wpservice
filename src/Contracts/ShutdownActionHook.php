<?php

namespace WpService\Contracts;

interface ShutdownActionHook
{
    /**
 * Runs just before PHP shuts down execution.
 *
 * @since 1.2.0
 * @access private
 */
    public function shutdownActionHook(): void;
}
