<?php

namespace WpService\Contracts;

interface WpIsJsonpRequest
{
/**
 * Checks whether current request is a JSONP request, or is expecting a JSONP response.
 *
 * @since 5.2.0
 *
 * @return bool True if JSONP request, false otherwise.
 */
public function wpIsJsonpRequest(): bool;
}