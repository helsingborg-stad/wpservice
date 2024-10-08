<?php

namespace WpService\Contracts;

interface WpEmbedUnregisterHandler
{
    /**
 * Unregisters a previously-registered embed handler.
 *
 * @since 2.9.0
 *
 * @global WP_Embed $wp_embed WordPress Embed object.
 *
 * @param string $id       The handler ID that should be removed.
 * @param int $priority Optional. The priority of the handler to be removed. Default 10.
 */
    public function wpEmbedUnregisterHandler(string $id, int $priority = 10): void;
}
