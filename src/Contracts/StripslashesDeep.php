<?php

namespace WpService\Contracts;

interface StripslashesDeep
{
    /**
     * Navigates through an array, object, or scalar, and removes slashes from the values.
     *
     * @since 2.0.0
     *
     * @param mixed $value The value to be stripped.
     * @return mixed Stripped value.
     */
    public function stripslashesDeep(mixed $value): mixed;
}
