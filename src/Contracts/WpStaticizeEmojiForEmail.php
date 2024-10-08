<?php

namespace WpService\Contracts;

interface WpStaticizeEmojiForEmail
{
    /**
 * Converts emoji in emails into static images.
 *
 * @since 4.2.0
 *
 * @param array $mail The email data array.
 * @return array The email data array, with emoji in the message staticized.
 */
    public function wpStaticizeEmojiForEmail(array $mail): array;
}
