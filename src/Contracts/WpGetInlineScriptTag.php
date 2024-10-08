<?php

namespace WpService\Contracts;

interface WpGetInlineScriptTag
{
    /**
 * Constructs an inline script tag.
 *
 * It is possible to inject attributes in the `<script>` tag via the  {@see 'wp_script_attributes'}  filter.
 * Automatically injects type attribute if needed.
 *
 * @since 5.7.0
 *
 * @param string $data       Data for script tag: JavaScript, importmap, speculationrules, etc.
 * @param array $attributes Optional. Key-value pairs representing `<script>` tag attributes.
 * @return string String containing inline JavaScript code wrapped around `<script>` tag.
 */
    public function wpGetInlineScriptTag(string $data, array $attributes = []): string;
}
