<?php

namespace WpService\Contracts;

interface RegisterInitialSettings
{
/**
 * Registers default settings available in WordPress.
 *
 * The settings registered here are primarily useful for the REST API, so this
 * does not encompass all settings available in WordPress.
 *
 * @since 4.7.0
 * @since 6.0.1 The `show_on_front`, `page_on_front`, and `page_for_posts` options were added.
 */
    public function registerInitialSettings(): void;
}
