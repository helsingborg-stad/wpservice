<?php

namespace WpService\Contracts;

interface WpEnableBlockTemplates
{
    /**
 * Enables the block templates (editor mode) for themes with theme.json by default.
 *
 * @access private
 * @since 5.8.0
 */
    public function wpEnableBlockTemplates(): void;
}
