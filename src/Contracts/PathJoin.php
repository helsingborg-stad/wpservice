<?php

namespace WpService\Contracts;

interface PathJoin
{
    /**
 * Joins two filesystem paths together.
 *
 * For example, 'give me $path relative to $base'. If the $path is absolute,
 * then it the full path is returned.
 *
 * @since 2.5.0
 *
 * @param string $base Base path.
 * @param string $path Path relative to $base.
 * @return string The path with the base or absolute path.
 */
    public function pathJoin(string $base, string $path): string;
}
