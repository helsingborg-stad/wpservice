<?php

namespace WpService\Contracts;

interface WpAddInlineStyle
{
    /**
     * Adds extra CSS styles to a registered stylesheet.
     *
     * Styles will only be added if the stylesheet is already in the queue.
     * Accepts a string $data containing the CSS. If two or more CSS code blocks
     * are added to the same stylesheet $handle, they will be printed in the order
     * they were added, i.e. the latter added styles can redeclare the previous.
     *
     * @see WP_Styles::add_inline_style()
     *
     * @since 3.3.0
     *
     * @param string $handle Name of the stylesheet to add the extra styles to.
     * @param string $data   String containing the CSS styles to be added.
     * @return bool True on success, false on failure.
     */
    public function wpAddInlineStyle(string $handle, string $data): bool;
}
