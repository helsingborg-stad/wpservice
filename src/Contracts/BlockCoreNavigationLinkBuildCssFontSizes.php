<?php

namespace WpService\Contracts;

interface BlockCoreNavigationLinkBuildCssFontSizes
{
    /**
 * Build an array with CSS classes and inline styles defining the font sizes
 * which will be applied to the navigation markup in the front-end.
 *
 * @since 5.9.0
 *
 * @param array $context Navigation block context.
 * @return array Font size CSS classes and inline styles.
 */
public function blockCoreNavigationLinkBuildCssFontSizes(array $context): array;
}
