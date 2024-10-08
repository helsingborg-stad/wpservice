<?php

namespace WpService\Contracts;

interface RestApiDefaultFilters
{
    /**
 * Registers the default REST API filters.
 *
 * Attached to the {@see 'rest_api_init'} action
 * to make testing and disabling these filters easier.
 *
 * @since 4.4.0
 */
    public function restApiDefaultFilters(): void;
}
