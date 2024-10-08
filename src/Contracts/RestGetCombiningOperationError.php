<?php

namespace WpService\Contracts;

interface RestGetCombiningOperationError
{
    /**
     * Gets the error of combining operation.
     *
     * @since 5.6.0
     *
     * @param array $value  The value to validate.
     * @param string $param  The parameter name, used in error messages.
     * @param array $errors The errors array, to search for possible error.
     * @return \WP_Error      The combining operation error.
     */
    public function restGetCombiningOperationError(array $value, string $param, array $errors): \WP_Error;
}
