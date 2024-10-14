<?php

namespace WpService\Contracts;

interface RestSendCorsHeaders
{
/**
 * Sends Cross-Origin Resource Sharing headers with API requests.
 *
 * @since 4.4.0
 *
 * @param mixed $value Response data.
 * @return mixed Response data.
 */
    public function restSendCorsHeaders(mixed $value): mixed;
}
