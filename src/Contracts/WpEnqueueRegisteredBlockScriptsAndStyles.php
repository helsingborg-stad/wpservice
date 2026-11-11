<?php

namespace WpService\Contracts;

interface WpEnqueueRegisteredBlockScriptsAndStyles
{
/**
 * Enqueues registered block scripts and styles, depending on current rendered
 * context (only enqueuing editor scripts while in context of the editor).
 *
 * @since 5.0.0
 */
    public function wpEnqueueRegisteredBlockScriptsAndStyles(): void;
}
