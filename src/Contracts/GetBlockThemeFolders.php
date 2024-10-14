<?php

namespace WpService\Contracts;

interface GetBlockThemeFolders
{
/**
 * For backward compatibility reasons,
 * block themes might be using block-templates or block-template-parts,
 * this function ensures we fallback to these folders properly.
 *
 * @since 5.9.0
 *
 * @param string $themeStylesheet The stylesheet. Default is to leverage the main theme root.
 *
 * @return string[] {
 *     Folder names used by block themes.
 *
 * @type string $wp_template      Theme-relative directory name for block templates.
 * @type string $wp_template_part Theme-relative directory name for block template parts.
 * }
 */
    public function getBlockThemeFolders(string $themeStylesheet = null): array;
}
