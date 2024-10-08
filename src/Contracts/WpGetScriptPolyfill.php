<?php

namespace WpService\Contracts;

interface WpGetScriptPolyfill
{
    /**
     * Returns contents of an inline script used in appending polyfill scripts for
     * browsers which fail the provided tests. The provided array is a mapping from
     * a condition to verify feature support to its polyfill script handle.
     *
     * @since 5.0.0
     *
     * @param \WP_Scripts $scripts WP_Scripts object.
     * @param string[] $tests   Features to detect.
     * @return string Conditional polyfill inline script.
     */
    public function wpGetScriptPolyfill(\WP_Scripts $scripts, array $tests): string;
}
