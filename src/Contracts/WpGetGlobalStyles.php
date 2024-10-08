<?php

namespace WpService\Contracts;

interface WpGetGlobalStyles
{
    /**
     * Gets the styles resulting of merging core, theme, and user data.
     *
     * @since 5.9.0
     * @since 6.3.0 the internal link format "var:preset|color|secondary" is resolved
     *              to "var(--wp--preset--font-size--small)" so consumers don't have to.
     * @since 6.3.0 `transforms` is now usable in the `context` parameter. In case [`transforms`]['resolve_variables']
     *              is defined, variables are resolved to their value in the styles.
     *
     * @param array $path    Path to the specific style to retrieve. Optional.
     *                       If empty, will return all styles.
     * @param array $context {
     *     Metadata to know where to retrieve the $path from. Optional.
     *
     * @type string $block_name Which block to retrieve the styles from.
     *                              If empty, it'll return the styles for the global context.
     * @type string $origin     Which origin to take data from.
     *                              Valid values are 'all' (core, theme, and user) or 'base' (core and theme).
     *                              If empty or unknown, 'all' is used.
     * @type array $transforms Which transformation(s) to apply.
     *                              Valid value is array( 'resolve-variables' ).
     *                              If defined, variables are resolved to their value in the styles.
     * }
     * @return mixed The styles array or individual style value to retrieve.
     */
    public function wpGetGlobalStyles(array $path = [], array $context = []): mixed;
}
