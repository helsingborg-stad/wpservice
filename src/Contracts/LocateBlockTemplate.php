<?php

namespace WpService\Contracts;

interface LocateBlockTemplate
{
    /**
     * Finds a block template with equal or higher specificity than a given PHP template file.
     *
     * Internally, this communicates the block content that needs to be used by the template canvas through a global variable.
     *
     * @since 5.8.0
     * @since 6.3.0 Added `$_wp_current_template_id` global for editing of current template directly from the admin bar.
     *
     * @global string $_wp_current_template_content
     * @global string $_wp_current_template_id
     *
     * @param string $template  Path to the template. See locate_template().
     * @param string $type      Sanitized filename without extension.
     * @param string[] $templates A list of template candidates, in descending order of priority.
     * @return string The path to the Site Editor template canvas file, or the fallback PHP template.
     */
    public function locateBlockTemplate(string $template, string $type, array $templates): string;
}
