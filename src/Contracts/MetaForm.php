<?php

namespace WpService\Contracts;

interface MetaForm
{
    /**
 * Prints the form in the Custom Fields meta box.
 *
 * @since 1.2.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param \WP_Post $post Optional. The post being edited.
 */
    public function metaForm(\WP_Post $post): void;
}
