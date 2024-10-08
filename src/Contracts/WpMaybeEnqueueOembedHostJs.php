<?php

namespace WpService\Contracts;

interface WpMaybeEnqueueOembedHostJs
{
    /**
 * Enqueue the wp-embed script if the provided oEmbed HTML contains a post embed.
 *
 * In order to only enqueue the wp-embed script on pages that actually contain post embeds, this function checks if the
 * provided HTML contains post embed markup and if so enqueues the script so that it will get printed in the footer.
 *
 * @since 5.9.0
 *
 * @param string $html Embed markup.
 * @return string Embed markup (without modifications).
 */
public function wpMaybeEnqueueOembedHostJs(string $html): string;
}
