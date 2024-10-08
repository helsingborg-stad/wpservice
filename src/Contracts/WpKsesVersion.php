<?php

namespace WpService\Contracts;

interface WpKsesVersion
{
    /**
     * Returns the version number of KSES.
     *
     * @since 1.0.0
     *
     * @return string KSES version number.
     */
    public function wpKsesVersion(): string;
}
