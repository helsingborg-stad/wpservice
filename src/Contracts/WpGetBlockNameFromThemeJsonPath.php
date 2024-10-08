<?php

namespace WpService\Contracts;

interface WpGetBlockNameFromThemeJsonPath
{
    /**
 * Gets the block name from a given theme.json path.
 *
 * @since 6.3.0
 * @access private
 *
 * @param array $path An array of keys describing the path to a property in theme.json.
 * @return string Identified block name, or empty string if none found.
 */
    public function wpGetBlockNameFromThemeJsonPath(array $path): string;
}