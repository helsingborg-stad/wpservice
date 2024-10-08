<?php

namespace WpService\Contracts;

interface WpEnqueueAdminBarHeaderStyles
{
    /**
 * Enqueues inline style to hide the admin bar when printing.
 *
 * @since 6.4.0
 */
    public function wpEnqueueAdminBarHeaderStyles(): void;
}
