<?php

namespace WpService\Contracts;

interface TheTitle
{
    /**
 * Displays or retrieves the current post title with optional markup.
 *
 * @since 0.71
 *
 * @param string $before  Optional. Markup to prepend to the title. Default empty.
 * @param string $after   Optional. Markup to append to the title. Default empty.
 * @param bool $display Optional. Whether to echo or return the title. Default true for echo.
 * @return void|string Void if `$display` argument is true or the title is empty,
 *                     current post title if `$display` is false.
 */
    public function theTitle(string $before, string $after, bool $display): string;
}
