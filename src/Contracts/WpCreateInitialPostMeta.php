<?php

namespace WpService\Contracts;

interface WpCreateInitialPostMeta
{
/**
 * Registers any additional post meta fields.
 *
 * @since 6.3.0 Adds `wp_pattern_sync_status` meta field to the wp_block post type so an unsynced option can be added.
 *
 * @link https://github.com/WordPress/gutenberg/pull/51144
 */
    public function wpCreateInitialPostMeta(): void;
}
