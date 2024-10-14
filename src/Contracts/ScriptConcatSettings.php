<?php

namespace WpService\Contracts;

interface ScriptConcatSettings
{
/**
 * Determines the concatenation and compression settings for scripts and styles.
 *
 * @since 2.8.0
 *
 * @global bool $concatenate_scripts
 * @global bool $compress_scripts
 * @global bool $compress_css
 */
    public function scriptConcatSettings(): void;
}
