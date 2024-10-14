<?php

namespace WpService\Contracts;

interface WpGetHttpHeaders
{
/**
 * Retrieves HTTP Headers from URL.
 *
 * @since 1.5.1
 *
 * @param string $url        URL to retrieve HTTP headers from.
 * @param bool $deprecated Not Used.
 * @return \WpOrg\Requests\Utility\CaseInsensitiveDictionary|false Headers on success, false on failure.
 */
    public function wpGetHttpHeaders(string $url, bool $deprecated = false): \WpOrg\Requests\Utility\CaseInsensitiveDictionary|false;
}
