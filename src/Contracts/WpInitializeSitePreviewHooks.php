<?php

namespace WpService\Contracts;

interface WpInitializeSitePreviewHooks
{
/**
 * Initialize site preview.
 *
 * This function sets IFRAME_REQUEST to true if the site preview parameter is set.
 *
 * @since 6.8.0
 */
    public function wpInitializeSitePreviewHooks(): void;
}
