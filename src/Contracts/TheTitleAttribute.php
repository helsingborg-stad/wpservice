<?php

namespace WpService\Contracts;

interface TheTitleAttribute
{
/**
 * Sanitizes the current title when retrieving or displaying.
 *
 * Works like the_title(), except the parameters can be in a string or
 * an array. See the function for what can be override in the $args parameter.
 *
 * The title before it is displayed will have the tags stripped and esc_attr()
 * before it is passed to the user or displayed. The default as with the_title(),
 * is to display the title.
 *
 * @since 2.3.0
 *
 * @param string|array $args {
 *     Title attribute arguments. Optional.
 *
 * @type string  $before Markup to prepend to the title. Default empty.
 * @type string  $after  Markup to append to the title. Default empty.
 * @type bool    $echo   Whether to echo or return the title. Default true for echo.
 * @type WP_Post $post   Current post object to retrieve the title for.
 * }
 * @return void|string Void if 'echo' argument is true, the title attribute if 'echo' is false.
 */
    public function theTitleAttribute(string|array $args = ''): mixed;
}
