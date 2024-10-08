<?php

namespace WpService\Contracts;

interface Read
{
    /**
 * Reads bytes and advances the stream position by the same count.
 *
 * @param \stream $handle    Bytes will be read from this resource.
 * @param int $numBytes Number of bytes read. Must be greater than 0.
 * @return \binary string|false            The raw bytes or false on failure.
 */
    public function read(\stream $handle, int $numBytes): \binary;
}
