<?php

namespace WpService\Contracts;

interface RequireWpDb
{
    /**
     * Loads the database class file and instantiates the `$wpdb` global.
     *
     * @since 2.5.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     */
    public function requireWpDb(): void;
}
