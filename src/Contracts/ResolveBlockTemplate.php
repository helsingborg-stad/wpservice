<?php

namespace WpService\Contracts;

interface ResolveBlockTemplate
{
    /**
 * Returns the correct 'wp_template' to render for the request template type.
 *
 * @access private
 * @since 5.8.0
 * @since 5.9.0 Added the `$fallback_template` parameter.
 *
 * @param string $templateType      The current template type.
 * @param string[] $templateHierarchy The current template hierarchy, ordered by priority.
 * @param string $fallbackTemplate  A PHP fallback template to use if no matching block template is found.
 * @return \WP_Block_Template|null template A template object, or null if none could be found.
 */
    public function resolveBlockTemplate(string $templateType, array $templateHierarchy, string $fallbackTemplate): \WP_Block_Template|null;
}
