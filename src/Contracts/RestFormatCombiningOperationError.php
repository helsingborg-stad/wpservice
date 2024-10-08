<?php

namespace WpService\Contracts;

interface RestFormatCombiningOperationError
{
    /**
 * Formats a combining operation error into a WP_Error object.
 *
 * @since 5.6.0
 *
 * @param string $param The parameter name.
 * @param array $error  The error details.
 * @return \WP_Error
 */
    public function restFormatCombiningOperationError(string $param, array $error): \WP_Error;
}
