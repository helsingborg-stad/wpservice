<?php

namespace WpService\Contracts;

interface PrintEmojiDetectionScript
{
/**
 * Prints the inline Emoji detection script if it is not already printed.
 *
 * @since 4.2.0
 */
    public function printEmojiDetectionScript(): void;
}
