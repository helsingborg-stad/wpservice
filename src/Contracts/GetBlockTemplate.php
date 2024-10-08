<?php

namespace WpService\Contracts;

interface GetBlockTemplate
{
    /**
     * Retrieves a single unified template object using its id.
     *
     * @since 5.8.0
     *
     * @param string $id            Template unique identifier (example: 'theme_slug//template_slug').
     * @param string $templateType Optional. Template type. Either 'wp_template' or 'wp_template_part'.
     *                              Default 'wp_template'.
     * @return \WP_Block_Template|null Template.
     */
    public function getBlockTemplate(string $id, string $templateType = 'wp_template'): \WP_Block_Template|null;
}
