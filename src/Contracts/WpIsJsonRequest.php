<?php

namespace WpService\Contracts;

interface WpIsJsonRequest
{
    /**
 * Checks whether current request is a JSON request, or is expecting a JSON response.
 *
 * @since 5.0.0
 *
 * @return bool True if `Accepts` or `Content-Type` headers contain `application/json`.
 *              False otherwise.
 */
    public function wpIsJsonRequest(): bool;
}