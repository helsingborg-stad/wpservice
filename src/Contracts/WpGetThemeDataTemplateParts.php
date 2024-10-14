<?php

namespace WpService\Contracts;

interface WpGetThemeDataTemplateParts
{
/**
 * Returns the metadata for the template parts defined by the theme.
 *
 * @since 6.4.0
 *
 * @return array Associative array of `$part_name => $part_data` pairs,
 *               with `$part_data` having "title" and "area" fields.
 */
    public function wpGetThemeDataTemplateParts(): array;
}
