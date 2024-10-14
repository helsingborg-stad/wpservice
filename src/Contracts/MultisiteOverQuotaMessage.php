<?php

namespace WpService\Contracts;

interface MultisiteOverQuotaMessage
{
/**
 * Displays the out of storage quota message in Multisite.
 *
 * @since 3.5.0
 */
    public function multisiteOverQuotaMessage(): void;
}
