<?php

namespace WpService\Contracts;

interface ReadBigEndian
{
    /**
 * Reads an unsigned integer with most significant bits first.
 *
 * @param binary string $input     Must be at least $num_bytes-long.
 * @param int $numBytes Number of parsed bytes.
 * @return int                     Value.
 */
    public function readBigEndian(int $numBytes): int;
}
