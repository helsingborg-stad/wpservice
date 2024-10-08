<?php

namespace WpService\Contracts;

interface NetworkStep2
{
    /**
 * Prints step 2 for Network installation process.
 *
 * @since 3.0.0
 *
 * @global wpdb $wpdb     WordPress database abstraction object.
 * @global bool $is_nginx Whether the server software is Nginx or something else.
 *
 * @param false|\WP_Error $errors Optional. Error object. Default false.
 */
    public function networkStep2(false|\WP_Error $errors): void;
}
