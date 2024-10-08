<?php

namespace WpService\Contracts;

interface GetTheBlockTemplateHtml
{
    /**
 * Returns the markup for the current template.
 *
 * @access private
 * @since 5.8.0
 *
 * @global string   $_wp_current_template_id
 * @global string   $_wp_current_template_content
 * @global WP_Embed $wp_embed                     WordPress Embed object.
 * @global WP_Query $wp_query                     WordPress Query object.
 *
 * @return string Block template markup.
 */
    public function getTheBlockTemplateHtml(): string;
}
