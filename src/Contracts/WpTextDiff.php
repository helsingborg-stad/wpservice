<?php

namespace WpService\Contracts;

interface WpTextDiff
{
/**
 * Displays a human readable HTML representation of the difference between two strings.
 *
 * The Diff is available for getting the changes between versions. The output is
 * HTML, so the primary use is for displaying the changes. If the two strings
 * are equivalent, then an empty string will be returned.
 *
 * @since 2.6.0
 *
 * @see wp_parse_args() Used to change defaults to user defined settings.
 * @uses Text_Diff
 * @uses WP_Text_Diff_Renderer_Table
 *
 * @param string $leftString  "old" (left) version of string.
 * @param string $rightString "new" (right) version of string.
 * @param string|array $args {
 *     Associative array of options to pass to WP_Text_Diff_Renderer_Table().
 *
 * @type string $title           Titles the diff in a manner compatible
 *                                   with the output. Default empty.
 * @type string $title_left      Change the HTML to the left of the title.
 *                                   Default empty.
 * @type string $title_right     Change the HTML to the right of the title.
 *                                   Default empty.
 * @type bool   $show_split_view True for split view (two columns), false for
 *                                   un-split view (single column). Default true.
 * }
 * @return string Empty string if strings are equivalent or HTML with differences.
 */
    public function wpTextDiff(string $leftString, string $rightString, string|array $args = null): string;
}
