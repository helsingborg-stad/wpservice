<?php

namespace WpService\Contracts;

interface _ex
{
    /**
 * Displays translated string with gettext context.
 *
 * @since 3.0.0
 *
 * @param string $text    Text to translate.
 * @param string $context Context information for the translators.
 * @param string $domain  Optional. Text domain. Unique identifier for retrieving translated strings.
 *                        Default 'default'.
 */
    public function _ex(string $text, string $context, string $domain = 'default'): void;
}
