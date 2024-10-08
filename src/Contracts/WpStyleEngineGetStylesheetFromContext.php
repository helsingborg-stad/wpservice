<?php

namespace WpService\Contracts;

interface WpStyleEngineGetStylesheetFromContext
{
    /**
 * Returns compiled CSS from a store, if found.
 *
 * @since 6.1.0
 *
 * @param string $context A valid context name, corresponding to an existing store key.
 * @param array $options {
 *     Optional. An array of options. Default empty array.
 *
 *     @type bool $optimize Whether to optimize the CSS output, e.g. combine rules.
 *                          Default false.
 *     @type bool $prettify Whether to add new lines and indents to output.
 *                          Defaults to whether the `SCRIPT_DEBUG` constant is defined.
 * }
 * @return string A compiled CSS string.
 */
    public function wpStyleEngineGetStylesheetFromContext(string $context, array $options): string;
}
