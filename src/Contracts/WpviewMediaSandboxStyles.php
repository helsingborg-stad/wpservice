<?php

namespace WpService\Contracts;

interface WpviewMediaSandboxStyles
{
    /**
     * Returns the URLs for CSS files used in an iframe-sandbox'd TinyMCE media view.
     *
     * @since 4.0.0
     *
     * @return string[] The relevant CSS file URLs.
     */
    public function wpviewMediaSandboxStyles(): array;
}
