<?php

namespace WpService\Contracts;

interface GetShortcodeAttsRegex
{
/**
 * Retrieves the shortcode attributes regex.
 *
 * @since 4.4.0
 *
 * @return string The shortcode attribute regular expression.
 */
    public function getShortcodeAttsRegex(): string;
}
