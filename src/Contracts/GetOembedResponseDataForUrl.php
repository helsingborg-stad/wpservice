<?php

namespace WpService\Contracts;

interface GetOembedResponseDataForUrl
{
    /**
 * Retrieves the oEmbed response data for a given URL.
 *
 * @since 5.0.0
 *
 * @param string $url  The URL that should be inspected for discovery `<link>` tags.
 * @param array $args oEmbed remote get arguments.
 * @return object|false oEmbed response data if the URL does belong to the current site. False otherwise.
 */
    public function getOembedResponseDataForUrl(string $url, array $args): object|false;
}
