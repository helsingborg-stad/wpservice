<?php

namespace WpService\Contracts;

interface WpRemoveSurroundingEmptyScriptTags
{
    /**
 * Removes leading and trailing _empty_ script tags.
 *
 * This is a helper meant to be used for literal script tag construction
 * within `wp_get_inline_script_tag()` or `wp_print_inline_script_tag()`.
 * It removes the literal values of "<script>" and "</script>" from
 * around an inline script after trimming whitespace. Typically this
 * is used in conjunction with output buffering, where `ob_get_clean()`
 * is passed as the `$contents` argument.
 *
 * Example:
 *
 *     // Strips exact literal empty SCRIPT tags.
 *     $js = '<script>sayHello();</script>;
 *     'sayHello();' === wp_remove_surrounding_empty_script_tags( $js );
 *
 *     // Otherwise if anything is different it warns in the JS console.
 *     $js = '<script type="text/javascript">console.log( "hi" );</script>';
 *     'console.error( ... )' === wp_remove_surrounding_empty_script_tags( $js );
 *
 * @since 6.4.0
 * @access private
 *
 * @see wp_print_inline_script_tag()
 * @see wp_get_inline_script_tag()
 *
 * @param string $contents Script body with manually created SCRIPT tag literals.
 * @return string Script body without surrounding script tag literals, or
 *                original contents if both exact literals aren't present.
 */
    public function wpRemoveSurroundingEmptyScriptTags(string $contents): string;
}
