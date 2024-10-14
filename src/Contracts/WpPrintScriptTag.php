<?php

namespace WpService\Contracts;

interface WpPrintScriptTag
{
/**
 * Prints formatted `<script>` loader tag.
 *
 * It is possible to inject attributes in the `<script>` tag via the  {@see 'wp_script_attributes'}  filter.
 * Automatically injects type attribute if needed.
 *
 * @since 5.7.0
 *
 * @param array $attributes Key-value pairs representing `<script>` tag attributes.
 */
    public function wpPrintScriptTag(array $attributes): void;
}
