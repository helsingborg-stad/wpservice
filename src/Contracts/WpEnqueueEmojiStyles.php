<?php

namespace WpService\Contracts;

interface WpEnqueueEmojiStyles
{
    /**
     * Enqueues the important emoji-related styles.
     *
     * @since 6.4.0
     */
    public function wpEnqueueEmojiStyles(): void;
}
