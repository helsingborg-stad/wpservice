<?php

namespace WpService\Contracts;

interface VerifyFileMd5
{
/**
 * Calculates and compares the MD5 of a file to its expected value.
 *
 * @since 3.7.0
 *
 * @param string $filename     The filename to check the MD5 of.
 * @param string $expectedMd5 The expected MD5 of the file, either a base64-encoded raw md5,
 *                             or a hex-encoded md5.
 * @return bool|\WP_Error True on success, false when the MD5 format is unknown/unexpected,
 *                       WP_Error on failure.
 */
    public function verifyFileMd5(string $filename, string $expectedMd5): bool|\WP_Error;
}
