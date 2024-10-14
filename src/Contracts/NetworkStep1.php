<?php

namespace WpService\Contracts;

interface NetworkStep1
{
/**
 * Prints step 1 for Network installation process.
 *
 * @todo Realistically, step 1 should be a welcome screen explaining what a Network is and such.
 *       Navigating to Tools > Network should not be a sudden "Welcome to a new install process!
 *       Fill this out and click here." See also contextual help todo.
 *
 * @since 3.0.0
 *
 * @global bool $is_apache
 *
 * @param false|\WP_Error $errors Optional. Error object. Default false.
 */
    public function networkStep1(false|\WP_Error $errors = false): void;
}
