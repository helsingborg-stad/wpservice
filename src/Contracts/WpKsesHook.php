<?php

namespace WpService\Contracts;

interface WpKsesHook
{
    /**
     * You add any KSES hooks here.
     *
     * There is currently only one KSES WordPress hook, {@see 'pre_kses'}, and it is called here.
     * All parameters are passed to the hooks and expected to receive a string.
     *
     * @since 1.0.0
     *
     * @param string $content           Content to filter through KSES.
     * @param array[]|string $allowedHtml      An array of allowed HTML elements and attributes,
     *                                          or a context name such as 'post'. See wp_kses_allowed_html()
     *                                          for the list of accepted context names.
     * @param string[] $allowedProtocols Array of allowed URL protocols.
     * @return string Filtered content through {@see 'pre_kses'} hook.
     */
    public function wpKsesHook(string $content, array|string $allowedHtml, array $allowedProtocols): string;
}
