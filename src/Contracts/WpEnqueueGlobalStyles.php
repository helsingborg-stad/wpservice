<?php

namespace WpService\Contracts;

interface WpEnqueueGlobalStyles
{
/**
 * Enqueues the global styles defined via theme.json.
 *
 * @since 5.8.0
 */
    public function wpEnqueueGlobalStyles(): void;
}
