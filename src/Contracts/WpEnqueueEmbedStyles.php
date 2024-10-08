<?php

namespace WpService\Contracts;

interface WpEnqueueEmbedStyles
{
    /**
     * Enqueues the CSS in the embed iframe header.
     *
     * @since 6.4.0
     */
    public function wpEnqueueEmbedStyles(): void;
}
