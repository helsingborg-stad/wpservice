<?php

namespace WpService\Contracts;

interface WpLocalizeScript
{
    /**
     * Localizes a script.
     *
     * Works only if the script has already been registered.
     *
     * Accepts an associative array `$l10n` and creates a JavaScript object:
     *
     *     "$object_name": {
     *         key: value,
     *         key: value,
     *         ...
     *     }
     *
     * @see WP_Scripts::localize()
     * @link https://core.trac.wordpress.org/ticket/11520
     *
     * @since 2.2.0
     *
     * @todo Documentation cleanup
     *
     * @param string $handle      Script handle the data will be attached to.
     * @param string $objectName Name for the JavaScript object. Passed directly, so it should be qualified JS variable.
     *                            Example: '/[a-zA-Z0-9_]+/'.
     * @param array $l10n        The data itself. The data can be either a single or multi-dimensional array.
     * @return bool True if the script was successfully localized, false otherwise.
     */
    public function wpLocalizeScript(string $handle, string $objectName, array $l10n): bool;
}
