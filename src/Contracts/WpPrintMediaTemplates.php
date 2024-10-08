<?php

namespace WpService\Contracts;

interface WpPrintMediaTemplates
{
    /**
     * Prints the templates used in the media manager.
     *
     * @since 3.5.0
     */
    public function wpPrintMediaTemplates(): void;
}
