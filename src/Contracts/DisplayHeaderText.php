<?php

namespace WpService\Contracts;

interface DisplayHeaderText
{
    /**
 * Whether to display the header text.
 *
 * @since 3.4.0
 *
 * @return bool
 */
    public function displayHeaderText(): bool;
}
