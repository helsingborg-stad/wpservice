<?php

namespace WpService\Contracts;

interface WpRegisterTinymceScripts
{
    /**
 * Registers TinyMCE scripts.
 *
 * @since 5.0.0
 *
 * @global string $tinymce_version
 * @global bool   $concatenate_scripts
 * @global bool   $compress_scripts
 *
 * @param \WP_Scripts $scripts            WP_Scripts object.
 * @param bool $forceUncompressed Whether to forcibly prevent gzip compression. Default false.
 */
    public function wpRegisterTinymceScripts(\WP_Scripts $scripts, bool $forceUncompressed = false): void;
}
