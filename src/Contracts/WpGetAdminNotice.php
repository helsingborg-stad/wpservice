<?php

namespace WpService\Contracts;

interface WpGetAdminNotice
{
    /**
 * Creates and returns the markup for an admin notice.
 *
 * @since 6.4.0
 *
 * @param string $message The message.
 * @param array $args {
 *     Optional. An array of arguments for the admin notice. Default empty array.
 *
 *     @type string   $type               Optional. The type of admin notice.
 *                                        For example, 'error', 'success', 'warning', 'info'.
 *                                        Default empty string.
 *     @type bool     $dismissible        Optional. Whether the admin notice is dismissible. Default false.
 *     @type string   $id                 Optional. The value of the admin notice's ID attribute. Default empty string.
 *     @type string[] $additional_classes Optional. A string array of class names. Default empty array.
 *     @type string[] $attributes         Optional. Additional attributes for the notice div. Default empty array.
 *     @type bool     $paragraph_wrap     Optional. Whether to wrap the message in paragraph tags. Default true.
 * }
 * @return string The markup for an admin notice.
 */
    public function wpGetAdminNotice(string $message, array $args = []): string;
}
