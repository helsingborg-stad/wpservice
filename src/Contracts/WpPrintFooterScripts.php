<?php

namespace WpService\Contracts;

interface WpPrintFooterScripts
{
    /**
     * Hooks to print the scripts and styles in the footer.
     *
     * @since 2.8.0
     */
    public function wpPrintFooterScripts(): void;
}
