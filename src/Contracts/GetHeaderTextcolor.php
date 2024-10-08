<?php

namespace WpService\Contracts;

interface GetHeaderTextcolor
{
    /**
 * Retrieves the custom header text color in 3- or 6-digit hexadecimal form.
 *
 * @since 2.1.0
 *
 * @return string Header text color in 3- or 6-digit hexadecimal form (minus the hash symbol).
 */
    public function getHeaderTextcolor(): string;
}
