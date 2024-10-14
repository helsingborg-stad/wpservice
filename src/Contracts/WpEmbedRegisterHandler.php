<?php

namespace WpService\Contracts;

interface WpEmbedRegisterHandler
{
/**
 * Registers an embed handler.
 *
 * Should probably only be used for sites that do not support oEmbed.
 *
 * @since 2.9.0
 *
 * @global WP_Embed $wp_embed WordPress Embed object.
 *
 * @param string $id       An internal ID/name for the handler. Needs to be unique.
 * @param string $regex    The regex that will be used to see if this handler should be used for a URL.
 * @param callable $callback The callback function that will be called if the regex is matched.
 * @param int $priority Optional. Used to specify the order in which the registered handlers will
 *                           be tested. Default 10.
 */
    public function wpEmbedRegisterHandler(string $id, string $regex, callable $callback, int $priority = 10): void;
}
