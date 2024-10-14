<?php

namespace WpService\Contracts;

interface WpMaybeLoadEmbeds
{
/**
 * Determines if default embed handlers should be loaded.
 *
 * Checks to make sure that the embeds library hasn't already been loaded. If
 * it hasn't, then it will load the embeds library.
 *
 * @since 2.9.0
 *
 * @see wp_embed_register_handler()
 */
    public function wpMaybeLoadEmbeds(): void;
}
