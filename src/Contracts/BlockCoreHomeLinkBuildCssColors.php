<?php

namespace WpService\Contracts;

interface BlockCoreHomeLinkBuildCssColors
{
    /**
 * Build an array with CSS classes and inline styles defining the colors
 * which will be applied to the home link markup in the front-end.
 *
 * @since 6.0.0
 *
 * @param array $context home link block context.
 * @return array Colors CSS classes and inline styles.
 */
public function blockCoreHomeLinkBuildCssColors(array $context): array;
}
