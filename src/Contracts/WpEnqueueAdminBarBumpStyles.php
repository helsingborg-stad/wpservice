<?php

namespace WpService\Contracts;

interface WpEnqueueAdminBarBumpStyles
{
    /**
     * Enqueues inline bump styles to make room for the admin bar.
     *
     * @since 6.4.0
     */
    public function wpEnqueueAdminBarBumpStyles(): void;
}
