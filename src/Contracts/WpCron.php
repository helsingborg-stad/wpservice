<?php

namespace WpService\Contracts;

interface WpCron
{
/**
 * Registers _wp_cron() to run on the {@see 'shutdown'} action.
 *
 * The spawn_cron() function attempts to make a non-blocking loopback request to `wp-cron.php` (when alternative
 * cron is not being used). However, the wp_remote_post() function does not always respect the `timeout` and
 * `blocking` parameters. A timeout of `0.01` may end up taking 1 second. When this runs at the {@see 'wp_loaded'}
 * action, it increases the Time To First Byte (TTFB) since the HTML cannot be sent while waiting for the cron request
 * to initiate. Moving the spawning of cron to the {@see 'shutdown'} hook allows for the server to flush the HTML document to
 * the browser while waiting for the request.
 *
 * @since 2.1.0
 * @since 5.1.0 Return value added to indicate success or failure.
 * @since 5.7.0 Functionality moved to _wp_cron() to which this becomes a wrapper.
 * @since 6.9.0 The _wp_cron() callback is moved from {@see 'wp_loaded'} to the {@see 'shutdown'} action,
 *              unless `ALTERNATE_WP_CRON` is enabled; the function now always returns void.
 */
    public function wpCron(): void;
}
