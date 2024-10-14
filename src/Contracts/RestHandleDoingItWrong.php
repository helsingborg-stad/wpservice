<?php

namespace WpService\Contracts;

interface RestHandleDoingItWrong
{
/**
 * Handles _doing_it_wrong errors.
 *
 * @since 5.5.0
 *
 * @param string $functionName The function that was called.
 * @param string $message       A message explaining what has been done incorrectly.
 * @param string|null $version       The version of WordPress where the message was added.
 */
    public function restHandleDoingItWrong(string $functionName, string $message, string|null $version): void;
}
