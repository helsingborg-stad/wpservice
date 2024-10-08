<?php

namespace WpService\Contracts;

interface WpDebugBacktraceSummary
{
    /**
 * Returns a comma-separated string or array of functions that have been called to get
 * to the current point in code.
 *
 * @since 3.4.0
 *
 * @see https://core.trac.wordpress.org/ticket/19589
 *
 * @param string $ignoreClass Optional. A class to ignore all function calls within - useful
 *                             when you want to just give info about the callee. Default null.
 * @param int $skipFrames  Optional. A number of stack frames to skip - useful for unwinding
 *                             back to the source of the issue. Default 0.
 * @param bool $pretty       Optional. Whether you want a comma separated string instead of
 *                             the raw array returned. Default true.
 * @return string|array Either a string containing a reversed comma separated trace or an array
 *                      of individual calls.
 */
    public function wpDebugBacktraceSummary(string $ignoreClass = null, int $skipFrames = 0, bool $pretty = true): string|array;
}
