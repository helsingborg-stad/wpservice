<?php

namespace WpService\Contracts;

interface UnregisterBlockTemplate
{
/**
 * Unregister a block template.
 *
 * @since 6.7.0
 *
 * @param string $templateName Template name in the form of `plugin_uri//template_name`.
 * @return \WP_Block_Template|\WP_Error The unregistered template object on success, WP_Error object on failure or if the
 *                                    template doesn't exist.
 */
    public function unregisterBlockTemplate(string $templateName): \WP_Block_Template|\WP_Error;
}
