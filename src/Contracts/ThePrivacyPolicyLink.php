<?php

namespace WpService\Contracts;

interface ThePrivacyPolicyLink
{
    /**
 * Displays the privacy policy link with formatting, when applicable.
 *
 * @since 4.9.6
 *
 * @param string $before Optional. Display before privacy policy link. Default empty.
 * @param string $after  Optional. Display after privacy policy link. Default empty.
 */
    public function thePrivacyPolicyLink(string $before = '', string $after = ''): void;
}
