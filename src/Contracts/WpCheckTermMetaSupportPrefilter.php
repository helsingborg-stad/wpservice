<?php

namespace WpService\Contracts;

interface WpCheckTermMetaSupportPrefilter
{
    /**
     * Aborts calls to term meta if it is not supported.
     *
     * @since 5.0.0
     *
     * @param mixed $check Skip-value for whether to proceed term meta function execution.
     * @return mixed Original value of $check, or false if term meta is not supported.
     */
    public function wpCheckTermMetaSupportPrefilter(mixed $check): mixed;
}
