<?php

namespace WpService\Contracts;

interface RegisterBlockTemplate
{
/**
 * Register a block template.
 *
 * @since 6.7.0
 *
 * @param string $templateName  Template name in the form of `plugin_uri//template_name`.
 * @param array|string $args           {
 * @type string        $title                 Optional. Title of the template as it will be shown in the Site Editor
 *                                                and other UI elements.
 * @type string        $description           Optional. Description of the template as it will be shown in the Site
 *                                                Editor.
 * @type string        $content               Optional. Default content of the template that will be used when the
 *                                                template is rendered or edited in the editor.
 * @type string[]      $post_types            Optional. Array of post types to which the template should be available.
 * @type string        $plugin                Optional. Slug of the plugin that registers the template.
 * }
 * @return \WP_Block_Template|\WP_Error The registered template object on success, WP_Error object on failure.
 */
    public function registerBlockTemplate(string $templateName, array|string $args = []): \WP_Block_Template|\WP_Error;
}
