<?php

namespace WpService\Contracts;

interface EnqueueEmbedScripts
{
    /**
     * Enqueues embed iframe default CSS and JS.
     *
     * Enqueue PNG fallback CSS for embed iframe for legacy versions of IE.
     *
     * Allows plugins to queue scripts for the embed iframe end using wp_enqueue_script().
     * Runs first in oembed_head().
     *
     * @since 4.4.0
     */
    public function enqueueEmbedScripts(): void;
}
