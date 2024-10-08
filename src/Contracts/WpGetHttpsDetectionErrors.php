<?php

namespace WpService\Contracts;

interface WpGetHttpsDetectionErrors
{
    /**
 * Runs a remote HTTPS request to detect whether HTTPS supported, and stores potential errors.
 *
 * This internal function is called by a regular Cron hook to ensure HTTPS support is detected and maintained.
 *
 * @since 6.4.0
 * @access private
 */
    public function wpGetHttpsDetectionErrors(): void;
}
