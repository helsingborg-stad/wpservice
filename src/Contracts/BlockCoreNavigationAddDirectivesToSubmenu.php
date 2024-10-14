<?php

namespace WpService\Contracts;

interface BlockCoreNavigationAddDirectivesToSubmenu
{
/**
 * Add Interactivity API directives to the navigation-submenu and page-list
 * blocks markup using the Tag Processor.
 *
 * @since 6.3.0
 *
 * @param \WP_HTML_Tag_Processor $tags             Markup of the navigation block.
 * @param array $blockAttributes Block attributes.
 *
 * @return string Submenu markup with the directives injected.
 */
    public function blockCoreNavigationAddDirectivesToSubmenu(\WP_HTML_Tag_Processor $tags, array $blockAttributes): string;
}
