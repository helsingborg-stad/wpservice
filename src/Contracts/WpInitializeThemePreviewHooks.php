<?php

namespace WpService\Contracts;

interface WpInitializeThemePreviewHooks
{
/**
 * Add filters and actions to enable Block Theme Previews in the Site Editor.
 *
 * The filters and actions should be added after `pluggable.php` is included as they may
 * trigger code that uses `current_user_can()` which requires functionality from `pluggable.php`.
 *
 * @since 6.3.2
 */
    public function wpInitializeThemePreviewHooks(): void;
}
