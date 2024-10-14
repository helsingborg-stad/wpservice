<?php

namespace WpService\Contracts;

interface CreateInitialThemeFeatures
{
/**
 * Creates the initial theme features when the 'setup_theme' action is fired.
 *
 * See {@see 'setup_theme'}.
 *
 * @since 5.5.0
 * @since 6.0.1 The `block-templates` feature was added.
 */
    public function createInitialThemeFeatures(): void;
}
