<?php

namespace WpService\Contracts;

interface GetDirsize
{
    /**
 * Gets the size of a directory.
 *
 * A helper function that is used primarily to check whether
 * a blog has exceeded its allowed upload space.
 *
 * @since MU (3.0.0)
 * @since 5.2.0 $max_execution_time parameter added.
 *
 * @param string $directory Full path of a directory.
 * @param int $maxExecutionTime Maximum time to run before giving up. In seconds.
 *                                   The timeout is global and is measured from the moment WordPress started to load.
 * @return int|false|null Size in bytes if a valid directory. False if not. Null if timeout.
 */
    public function getDirsize(string $directory, int $maxExecutionTime): int|false|null;
}
