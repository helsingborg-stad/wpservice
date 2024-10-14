<?php

namespace WpService\Contracts;

interface VerifyFileSignature
{
/**
 * Verifies the contents of a file against its ED25519 signature.
 *
 * @since 5.2.0
 *
 * @param string $filename            The file to validate.
 * @param string|array $signatures          A Signature provided for the file.
 * @param string|false $filenameForErrors Optional. A friendly filename for errors.
 * @return bool|\WP_Error True on success, false if verification not attempted,
 *                       or WP_Error describing an error condition.
 */
    public function verifyFileSignature(string $filename, string|array $signatures, string|false $filenameForErrors = false): bool|\WP_Error;
}
