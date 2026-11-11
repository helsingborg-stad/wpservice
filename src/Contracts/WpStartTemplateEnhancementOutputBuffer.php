<?php

namespace WpService\Contracts;

interface WpStartTemplateEnhancementOutputBuffer
{
/**
 * Starts the template enhancement output buffer.
 *
 * This function is called immediately before the template is included.
 *
 * @since 6.9.0
 *
 * @return bool Whether the output buffer successfully started.
 */
    public function wpStartTemplateEnhancementOutputBuffer(): bool;
}
