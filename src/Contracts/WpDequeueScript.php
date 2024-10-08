<?php

namespace WpService\Contracts;

interface WpDequeueScript
{
    /**
     * Removes a previously enqueued script.
     *
     * @see WP_Dependencies::dequeue()
     *
     * @since 3.1.0
     *
     * @param string $handle Name of the script to be removed.
     */
    public function wpDequeueScript(string $handle): void;
}
