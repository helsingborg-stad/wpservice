<?php

namespace WpService\Contracts;

interface GetBlockFileTemplate
{
    /**
 * Retrieves a unified template object based on a theme file.
 *
 * This is a fallback of get_block_template(), used when no templates are found in the database.
 *
 * @since 5.9.0
 *
 * @param string $id            Template unique identifier (example: 'theme_slug//template_slug').
 * @param string $templateType Optional. Template type. Either 'wp_template' or 'wp_template_part'.
 *                              Default 'wp_template'.
 * @return \WP_Block_Template|null The found block template, or null if there isn't one.
 */
    public function getBlockFileTemplate(string $id, string $templateType): \WP_Block_Template|null;
}
