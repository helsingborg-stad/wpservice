<?php

namespace WpService\Contracts;

interface GetThePrivacyPolicyLink
{
    /**
 * Returns the privacy policy link with formatting, when applicable.
 *
 * @since 4.9.6
 * @since 6.2.0 Added 'privacy-policy' rel attribute.
 *
 * @param string $before Optional. Display before privacy policy link. Default empty.
 * @param string $after  Optional. Display after privacy policy link. Default empty.
 * @return string Markup for the link and surrounding elements. Empty string if it
 *                doesn't exist.
 */
    public function getThePrivacyPolicyLink(string $before, string $after): string;
}
