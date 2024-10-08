<?php

namespace WpService\Contracts;

interface WpGetLayoutDefinitions
{
    /**
 * Returns layout definitions, keyed by layout type.
 *
 * Provides a common definition of slugs, classnames, base styles, and spacing styles for each layout type.
 * When making changes or additions to layout definitions, the corresponding JavaScript definitions should
 * also be updated.
 *
 * @since 6.3.0
 * @since 6.6.0 Updated specificity for compatibility with 0-1-0 global styles specificity.
 * @access private
 *
 * @return array[] Layout definitions.
 */
    public function wpGetLayoutDefinitions(): array;
}
