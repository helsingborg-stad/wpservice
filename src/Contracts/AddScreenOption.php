<?php

namespace WpService\Contracts;

interface AddScreenOption
{
    /**
 * Register and configure an admin screen option
 *
 * @since 3.1.0
 *
 * @param string $option An option name.
 * @param mixed $args   Option-dependent arguments.
 */
    public function addScreenOption(string $option, mixed $args = []): void;
}
