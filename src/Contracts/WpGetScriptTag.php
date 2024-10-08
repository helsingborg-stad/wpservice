<?php

namespace WpService\Contracts;

interface WpGetScriptTag
{
    /**
 * Formats `<script>` loader tags.
 *
 * It is possible to inject attributes in the `<script>` tag via the {@see 'wp_script_attributes'} filter.
 * Automatically injects type attribute if needed.
 *
 * @since 5.7.0
 *
 * @param array $attributes Key-value pairs representing `<script>` tag attributes.
 * @return string String containing `<script>` opening and closing tags.
 */
    public function wpGetScriptTag(array $attributes): string;
}
