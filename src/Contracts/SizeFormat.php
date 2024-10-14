<?php

namespace WpService\Contracts;

interface SizeFormat
{
/**
 * Converts a number of bytes to the largest unit the bytes will fit into.
 *
 * It is easier to read 1 KB than 1024 bytes and 1 MB than 1048576 bytes. Converts
 * number of bytes to human readable number by taking the number of that unit
 * that the bytes will go into it. Supports YB value.
 *
 * Please note that integers in PHP are limited to 32 bits, unless they are on
 * 64 bit architecture, then they have 64 bit size. If you need to place the
 * larger size then what PHP integer type will hold, then use a string. It will
 * be converted to a double, which should always have 64 bit length.
 *
 * Technically the correct unit names for powers of 1024 are KiB, MiB etc.
 *
 * @since 2.3.0
 * @since 6.0.0 Support for PB, EB, ZB, and YB was added.
 *
 * @param int|string $bytes    Number of bytes. Note max integer size for integers.
 * @param int $decimals Optional. Precision of number of decimal places. Default 0.
 * @return string|false Number string on success, false on failure.
 */
    public function sizeFormat(int|string $bytes, int $decimals = 0): string|false;
}
