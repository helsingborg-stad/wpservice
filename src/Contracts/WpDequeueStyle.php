<?php

namespace WpService\Contracts;

interface WpDequeueStyle
{
/**
 * Removes a previously enqueued CSS stylesheet.
 *
 * @see WP_Dependencies::dequeue()
 *
 * @since 3.1.0
 *
 * @param string $handle Name of the stylesheet to be removed.
 */
    public function wpDequeueStyle(string $handle): void;
}
