<?php

namespace WpService\Contracts;

interface WpKsesData
{
    /**
 * Sanitize content with allowed HTML KSES rules.
 *
 * This function expects unslashed data.
 *
 * @since 2.9.0
 *
 * @param string $data Content to filter, expected to not be escaped.
 * @return string Filtered content.
 */
    public function wpKsesData(string $data): string;
}
