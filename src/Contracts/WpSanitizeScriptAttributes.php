<?php

namespace WpService\Contracts;

interface WpSanitizeScriptAttributes
{
    /**
     * Sanitizes an attributes array into an attributes string to be placed inside a `<script>` tag.
     *
     * Automatically injects type attribute if needed.
     * Used by {@see wp_get_script_tag()} and {@see wp_get_inline_script_tag()}.
     *
     * @since 5.7.0
     *
     * @param array $attributes Key-value pairs representing `<script>` tag attributes.
     * @return string String made of sanitized `<script>` tag attributes.
     */
    public function wpSanitizeScriptAttributes(array $attributes): string;
}
