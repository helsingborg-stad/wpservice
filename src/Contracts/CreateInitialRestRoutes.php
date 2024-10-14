<?php

namespace WpService\Contracts;

interface CreateInitialRestRoutes
{
/**
 * Registers default REST API routes.
 *
 * @since 4.7.0
 */
    public function createInitialRestRoutes(): void;
}
