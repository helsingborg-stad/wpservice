<?php

namespace WpService\Contracts;

interface WpGetDbSchema
{
    /**
 * Retrieve the SQL for creating database tables.
 *
 * @since 3.3.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $scope   Optional. The tables for which to retrieve SQL. Can be all, global, ms_global, or blog tables. Defaults to all.
 * @param int $blogId Optional. The site ID for which to retrieve SQL. Default is the current site ID.
 * @return string The SQL needed to create the requested tables.
 */
    public function wpGetDbSchema(string $scope, int $blogId): string;
}
