<?php

namespace WpService\Contracts;

interface WpEnqueueGlobalStylesCustomCss
{
/**
 * Enqueues the global styles custom css defined via theme.json.
 *
 * @since 6.2.0
 */
public function wpEnqueueGlobalStylesCustomCss(): void;
}