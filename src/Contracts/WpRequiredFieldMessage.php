<?php

namespace WpService\Contracts;

interface WpRequiredFieldMessage
{
    /**
 * Creates a message to explain required form fields.
 *
 * @since 6.1.0
 *
 * @return string Message text and glyph wrapped in a `span` tag.
 */
    public function wpRequiredFieldMessage(): string;
}
