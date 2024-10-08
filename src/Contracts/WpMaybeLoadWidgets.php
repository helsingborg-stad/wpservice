<?php

namespace WpService\Contracts;

interface WpMaybeLoadWidgets
{
    /**
 * Determines if Widgets library should be loaded.
 *
 * Checks to make sure that the widgets library hasn't already been loaded.
 * If it hasn't, then it will load the widgets library and run an action hook.
 *
 * @since 2.2.0
 */
    public function wpMaybeLoadWidgets(): void;
}
