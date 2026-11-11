<?php

namespace WpService\Contracts;

interface WpRenderEmptyBlockTemplateWarning
{
/**
 * Renders a warning screen for empty block templates.
 *
 * @since 6.8.0
 *
 * @param \WP_Block_Template $blockTemplate The block template object.
 * @return string The warning screen HTML.
 */
    public function wpRenderEmptyBlockTemplateWarning(\WP_Block_Template $blockTemplate): string;
}
