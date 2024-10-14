<?php

namespace WpService\Contracts;

interface WpAdminCss
{
/**
 * Enqueues or directly prints a stylesheet link to the specified CSS file.
 *
 * "Intelligently" decides to enqueue or to print the CSS file. If the
 * {@see 'wp_print_styles'} action has *not* yet been called, the CSS file will be
 * enqueued. If the {@see 'wp_print_styles'} action has been called, the CSS link will
 * be printed. Printing may be forced by passing true as the $force_echo
 * (second) parameter.
 *
 * For backward compatibility with WordPress 2.3 calling method: If the $file
 * (first) parameter does not correspond to a registered CSS file, we assume
 * $file is a file relative to wp-admin/ without its ".css" extension. A
 * stylesheet link to that generated URL is printed.
 *
 * @since 2.3.0
 *
 * @param string $file       Optional. Style handle name or file name (without ".css" extension) relative
 *                           to wp-admin/. Defaults to 'wp-admin'.
 * @param bool $forceEcho Optional. Force the stylesheet link to be printed rather than enqueued.
 */
public function wpAdminCss(string $file = 'wp-admin', bool $forceEcho = false): void;
}