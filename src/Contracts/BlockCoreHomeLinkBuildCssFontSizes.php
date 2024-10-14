<?php

namespace WpService\Contracts;

interface BlockCoreHomeLinkBuildCssFontSizes
{
/**
 * Build an array with CSS classes and inline styles defining the font sizes
 * which will be applied to the home link markup in the front-end.
 *
 * @since 6.0.0
 *
 * @param array $context Home link block context.
 * @return array Font size CSS classes and inline styles.
 */
public function blockCoreHomeLinkBuildCssFontSizes(array $context): array;
}