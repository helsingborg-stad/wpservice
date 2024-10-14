<?php

namespace WpService\Contracts;

interface WpStyleIs
{
/**
 * Checks whether a CSS stylesheet has been added to the queue.
 *
 * @since 2.8.0
 *
 * @param string $handle Name of the stylesheet.
 * @param string $status Optional. Status of the stylesheet to check. Default 'enqueued'.
 *                       Accepts 'enqueued', 'registered', 'queue', 'to_do', and 'done'.
 * @return bool Whether style is queued.
 */
    public function wpStyleIs(string $handle, string $status = 'enqueued'): bool;
}
