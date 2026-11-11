<?php

namespace WpService\Contracts;

interface WpEnqueueClassicThemeStyles
{
/**
 * Loads classic theme styles on classic themes in the frontend.
 *
 * This is used for backwards compatibility for Button and File blocks specifically.
 *
 * @since 6.1.0
 * @since 6.2.0 Added File block styles.
 * @since 6.8.0 Moved stylesheet registration outside of this function.
 */
    public function wpEnqueueClassicThemeStyles(): void;
}
