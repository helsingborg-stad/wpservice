<?php

namespace WpService\Contracts;

interface WpPrivacyAnonymizeData
{
    /**
 * Returns uniform "anonymous" data by type.
 *
 * @since 4.9.6
 *
 * @param string $type The type of data to be anonymized.
 * @param string $data Optional. The data to be anonymized. Default empty string.
 * @return string The anonymous data for the requested type.
 */
    public function wpPrivacyAnonymizeData(string $type, string $data): string;
}
