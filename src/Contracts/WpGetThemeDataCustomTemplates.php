<?php

namespace WpService\Contracts;

interface WpGetThemeDataCustomTemplates
{
/**
 * Returns the metadata for the custom templates defined by the theme via theme.json.
 *
 * @since 6.4.0
 *
 * @return array Associative array of `$template_name => $template_data` pairs,
 *               with `$template_data` having "title" and "postTypes" fields.
 */
    public function wpGetThemeDataCustomTemplates(): array;
}
