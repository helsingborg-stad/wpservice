<?php

namespace WpService\Contracts;

interface WpNextScheduled
{
    /**
 * Retrieves the next timestamp for an event.
 *
 * @since 2.1.0
 *
 * @param string $hook Action hook of the event.
 * @param array $args Optional. Array containing each separate argument to pass to the hook's callback function.
 *                     Although not passed to a callback, these arguments are used to uniquely identify the
 *                     event, so they should be the same as those used when originally scheduling the event.
 *                     Default empty array.
 * @return int|false The Unix timestamp of the next time the event will occur. False if the event doesn't exist.
 */
    public function wpNextScheduled(string $hook, array $args): int|false;
}
