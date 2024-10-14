<?php

namespace WpService\Contracts;

interface WpAddInlineScript
{
/**
 * Adds extra code to a registered script.
 *
 * Code will only be added if the script is already in the queue.
 * Accepts a string `$data` containing the code. If two or more code blocks
 * are added to the same script `$handle`, they will be printed in the order
 * they were added, i.e. the latter added code can redeclare the previous.
 *
 * @since 4.5.0
 *
 * @see WP_Scripts::add_inline_script()
 *
 * @param string $handle   Name of the script to add the inline script to.
 * @param string $data     String containing the JavaScript to be added.
 * @param string $position Optional. Whether to add the inline script before the handle
 *                         or after. Default 'after'.
 * @return bool True on success, false on failure.
 */
    public function wpAddInlineScript(string $handle, string $data, string $position = 'after'): bool;
}
