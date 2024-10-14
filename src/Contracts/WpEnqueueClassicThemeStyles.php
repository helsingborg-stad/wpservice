<?php

namespace WpService\Contracts;

interface WpEnqueueClassicThemeStyles
{
/**
 * Loads classic theme styles on classic themes in the frontend.
 *
 * This is needed for backwards compatibility for button blocks specifically.
 *
 * @since 6.1.0
 */
    public function wpEnqueueClassicThemeStyles(): void;
}
