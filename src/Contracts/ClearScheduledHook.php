<?php

namespace WpService\Contracts;

use WP_Error;

interface ClearScheduledHook
{
    /**
    * Clear a scheduled hook.
    *
    * @see https://developer.wordpress.org/reference/functions/wp_clear_scheduled_hook/
    *
    * @param string $hook        The hook to clear.
    * @param array  $args        Optional. Arguments to pass when the hook runs.
    * @param bool   $wpError     Optional. Whether to return a WP_Error on failure.
    * @return int|false|WP_Error On success an integer representing the number of hooks cleared,
    *                            false if the hook does not exist, or a WP_Error instance on failure.
    */
    public function clearScheduledHook(string $hook, array $args = [], $wpError = false): int|false|WP_Error;
}
