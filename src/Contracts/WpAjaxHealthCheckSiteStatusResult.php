<?php

namespace WpService\Contracts;

interface WpAjaxHealthCheckSiteStatusResult
{
/**
 * Handles site health check to update the result status via AJAX.
 *
 * @since 5.2.0
 */
    public function wpAjaxHealthCheckSiteStatusResult(): void;
}
