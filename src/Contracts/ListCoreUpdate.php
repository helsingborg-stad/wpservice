<?php

namespace WpService\Contracts;

interface ListCoreUpdate
{
/**
 * Lists available core updates.
 *
 * @since 2.7.0
 *
 * @global string $wp_local_package Locale code of the package.
 * @global wpdb   $wpdb             WordPress database abstraction object.
 *
 * @param object $update
 */
    public function listCoreUpdate(object $update): void;
}
