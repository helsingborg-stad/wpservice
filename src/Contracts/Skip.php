<?php

namespace WpService\Contracts;

interface Skip
{
    /**
     * Advances the stream position by the given offset.
     *
     * @param \stream $handle    Bytes will be skipped from this resource.
     * @param int $numBytes Number of skipped bytes. Can be 0.
     * @return bool             True on success or false on failure.
     */
    public function skip(\stream $handle, int $numBytes): bool;
}
