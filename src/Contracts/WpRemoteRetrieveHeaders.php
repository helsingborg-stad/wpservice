<?php

namespace WpService\Contracts;

interface WpRemoteRetrieveHeaders
{
    /**
 * Retrieves only the headers from the raw response.
 *
 * @since 2.7.0
 * @since 4.6.0 Return value changed from an array to an WpOrg\Requests\Utility\CaseInsensitiveDictionary instance.
 *
 * @see \WpOrg\Requests\Utility\CaseInsensitiveDictionary
 *
 * @param array|\WP_Error $response HTTP response.
 * @return \WpOrg\Requests\Utility\CaseInsensitiveDictionary|array The headers of the response, or empty array
 *                                                                 if incorrect parameter given.
 */
    public function wpRemoteRetrieveHeaders(array|\WP_Error $response): \WpOrg\Requests\Utility\CaseInsensitiveDictionary|array;
}
