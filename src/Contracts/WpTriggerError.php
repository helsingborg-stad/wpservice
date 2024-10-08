<?php

namespace WpService\Contracts;

interface WpTriggerError
{
    /**
     * Generates a user-level error/warning/notice/deprecation message.
     *
     * Generates the message when `WP_DEBUG` is true.
     *
     * @since 6.4.0
     *
     * @param string $functionName The function that triggered the error.
     * @param string $message       The message explaining the error.
     *                              The message can contain allowed HTML 'a' (with href), 'code',
     *                              'br', 'em', and 'strong' tags and http or https protocols.
     *                              If it contains other HTML tags or protocols, the message should be escaped
     *                              before passing to this function to avoid being stripped {@see wp_kses()}.
     * @param int $errorLevel   Optional. The designated error type for this error.
     *                              Only works with E_USER family of constants. Default E_USER_NOTICE.
     */
    public function wpTriggerError(string $functionName, string $message, int $errorLevel = E_USER_NOTICE): void;
}
