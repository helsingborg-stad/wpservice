<?php

namespace WpService\Contracts;

interface GetHomePath
{
/**
 * Gets the absolute filesystem path to the root of the WordPress installation.
 *
 * @since 1.5.0
 *
 * @return string Full filesystem path to the root of the WordPress installation.
 */
    public function getHomePath(): string;
}
