<?php

namespace WpService\Contracts;

interface WpCron
{
/**
 * Registers _wp_cron() to run on the {@see 'wp_loaded'} action.
 *
 * If the {@see 'wp_loaded'} action has already fired, this function calls
 * _wp_cron() directly.
 *
 * Warning: This function may return Boolean FALSE, but may also return a non-Boolean
 * value which evaluates to FALSE. For information about casting to booleans see the
 * {@link https://www.php.net/manual/en/language.types.boolean.php PHP documentation}. Use
 * the `===` operator for testing the return value of this function.
 *
 * @since 2.1.0
 * @since 5.1.0 Return value added to indicate success or failure.
 * @since 5.7.0 Functionality moved to _wp_cron() to which this becomes a wrapper.
 *
 * @return false|int|void On success an integer indicating number of events spawned (0 indicates no
 *                        events needed to be spawned), false if spawning fails for one or more events or
 *                        void if the function registered _wp_cron() to run on the action.
 */
    public function wpCron(): mixed;
}
