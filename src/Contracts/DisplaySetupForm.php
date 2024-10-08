<?php

namespace WpService\Contracts;

interface DisplaySetupForm
{
    /**
 * Displays installer setup form.
 *
 * @since 2.8.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string|null $error
 */
    public function displaySetupForm(string|null $error): void;
}
