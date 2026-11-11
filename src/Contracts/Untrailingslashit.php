<?php

namespace WpService\Contracts;

interface Untrailingslashit
{
/**
 * Removes trailing forward slashes and backslashes if they exist.
 *
 * The primary use of this is for paths and thus should be used for paths. It is
 * not restricted to paths and offers no specific path support.
 *
 * @since 2.2.0
 *
 * @param string $value Value from which trailing slashes will be removed.
 * @return string String without the trailing slashes.
 */
    public function untrailingslashit(string $value): string;
}
