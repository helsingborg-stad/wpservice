<?php

namespace WpService\Contracts;

interface PageTemplateDropdown
{
    /**
     * Prints out option HTML elements for the page templates drop-down.
     *
     * @since 1.5.0
     * @since 4.7.0 Added the `$post_type` parameter.
     *
     * @param string $defaultTemplate Optional. The template file name. Default empty.
     * @param string $postType        Optional. Post type to get templates for. Default 'page'.
     */
    public function pageTemplateDropdown(string $defaultTemplate = '', string $postType = 'page'): void;
}
