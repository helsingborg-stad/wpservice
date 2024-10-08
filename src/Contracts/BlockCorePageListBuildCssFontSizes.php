<?php

namespace WpService\Contracts;

interface BlockCorePageListBuildCssFontSizes
{
    /**
 * Build an array with CSS classes and inline styles defining the font sizes
 * which will be applied to the pages markup in the front-end when it is a descendant of navigation.
 *
 * @since 5.8.0
 *
 * @param array $context Navigation block context.
 * @return array Font size CSS classes and inline styles.
 */
public function blockCorePageListBuildCssFontSizes(array $context): array;
}
