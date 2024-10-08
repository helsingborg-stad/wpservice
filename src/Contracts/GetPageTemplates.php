<?php

namespace WpService\Contracts;

interface GetPageTemplates
{
    /**
     * Gets the page templates available in this theme.
     *
     * @since 1.5.0
     * @since 4.7.0 Added the `$post_type` parameter.
     *
     * @param \WP_Post|null $post      Optional. The post being edited, provided for context.
     * @param string $postType Optional. Post type to get the templates for. Default 'page'.
     * @return string[] Array of template file names keyed by the template header name.
     */
    public function getPageTemplates(\WP_Post|null $post = null, string $postType = 'page'): array;
}
