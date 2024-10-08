<?php

namespace WpService\Contracts;

interface GetTemplate
{
    /**
 * Retrieves name of the active theme.
 *
 * @since 1.5.0
 *
 * @return string Template name.
 */
    public function getTemplate(): string;
}
