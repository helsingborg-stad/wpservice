<?php

namespace WpService\Contracts;

interface TouchTime
{
/**
 * Prints out HTML form date elements for editing post or comment publish date.
 *
 * @since 0.71
 * @since 4.4.0 Converted to use get_comment() instead of the global `$comment`.
 *
 * @global WP_Locale $wp_locale WordPress date and time locale object.
 *
 * @param int|bool $edit      Accepts 1|true for editing the date, 0|false for adding the date.
 * @param int|bool $forPost  Accepts 1|true for applying the date to a post, 0|false for a comment.
 * @param int $tabIndex The tabindex attribute to add. Default 0.
 * @param int|bool $multi     Optional. Whether the additional fields and buttons should be added.
 *                            Default 0|false.
 */
    public function touchTime(int|bool $edit = 1, int|bool $forPost = 1, int $tabIndex = 0, int|bool $multi = 0): void;
}
