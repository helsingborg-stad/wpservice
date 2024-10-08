<?php

namespace WpService\Contracts;

interface GetQueryTemplate
{
    /**
 * Retrieves path to a template.
 *
 * Used to quickly retrieve the path of a template without including the file
 * extension. It will also check the parent theme, if the file exists, with
 * the use of locate_template(). Allows for more generic template location
 * without the use of the other get_*_template() functions.
 *
 * @since 1.5.0
 *
 * @param string $type      Filename without extension.
 * @param string[] $templates An optional list of template candidates.
 * @return string Full path to template file.
 */
    public function getQueryTemplate(string $type, array $templates): string;
}
